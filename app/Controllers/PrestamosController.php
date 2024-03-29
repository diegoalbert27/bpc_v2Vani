<?php

use App\Core\baseController;
use App\Core\helpers;
use App\Models\Api\Response;
use App\Models\Category;
use App\Models\Inventario;
use App\Models\Libro;
use App\Models\Prestamo;
use App\Models\Solicitante;
use App\Utils\Audit\InterfaceAudit;
use App\Utils\Authentication\InterfaceAuthentication;

class PrestamosController extends baseController
{
    protected $authentication;
    protected $audit;
    protected $helpers;

    public function __construct(InterfaceAuthentication $authentication, InterfaceAudit $audit)
    {
        $this->authentication = $authentication;
        $this->audit = $audit;

        $this->helpers = new helpers();
    }

    public function Index()
    {
        $this->authentication($this->authentication->isAuth());

        $prestamo_model = new Prestamo();
        $prestamos = $prestamo_model->getAll();

        $solicitante_model = new Solicitante();
        $libro_model = new Libro();

        foreach ($prestamos as $prestamo) {
            $prestamo->numero_carnet2 = $solicitante_model->getByOne('id_sol', $prestamo->numero_carnet2);

            $prestamo->id_libro2 = $libro_model->getByOne('id_libro', $prestamo->id_libro2);
        }

        $this->view('Prestamos/Inicio', [
            'title' => 'Prestamos',
            'prestamos' => $prestamos
        ], true);
    }

    public function Get()
    {
        $this->authentication($this->authentication->isAuth());

        $prestamo_model = new Prestamo();
        $prestamos = $prestamo_model->getAll();

        $solicitante_model = new Solicitante();
        $libro_model = new Libro();

        foreach ($prestamos as $prestamo) {
            $prestamo->numero_carnet2 = $solicitante_model->getByOne('id_sol', $prestamo->numero_carnet2);

            $prestamo->id_libro2 = $libro_model->getByOne('id_libro', $prestamo->id_libro2);
        }

        $reponse = new Response(true, 'Préstamos', $prestamos);

        echo $this->json($reponse);
    }

    public function Details()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('prestamos', 'index', 'danger', 'El préstamo ingresado no fue encontrado');
            return;
        }

        $id_prestamo = $_GET['id'];

        $prestamo_model = new Prestamo();
        $prestamo = $prestamo_model->getByOne('id_p', $id_prestamo);

        if ( !$prestamo ) {
            $this->redirect('prestamos', 'index', 'danger', 'El préstamo ingresado no fue encontrado');
            return;
        }

        $solicitante_model = new Solicitante();
        $libro_model = new Libro();

        $prestamo->numero_carnet2 = $solicitante_model->getByOne('id_sol', $prestamo->numero_carnet2);

        $prestamo->id_libro2 = $libro_model->getByOne('id_libro', $prestamo->id_libro2);

        $this->view('Prestamos/Detail', [
            'title' => 'Información del Préstamo',
            'prestamo' => $prestamo
        ], true);
    }

    public function GeneratePrestamo()
    {
        $this->authentication($this->authentication->isAuth());

        $solicitante_model = new Solicitante();
        $solicitantes = $solicitante_model->getAll();
        $solicitantes = array_filter($solicitantes, function($solicitante) {
            return (int) $solicitante->estado_s !== 0;
        });

        $libro_model = new Libro();
        $libros = $libro_model->getAll();

        $category_model = new Category();

        $libros_actived = [];

        foreach ($libros as $libro) {
            if ($libro->estado_libro === 'Disponible para su lectura y préstamo') {
                $category = $category_model->getByOne('id', $libro->categoria);

                if ($category) {
                    $libro->categoria = $category;
                }

                $libros_actived[] = $libro;
            }
        }

        $this->view('Prestamos/GeneratePrestamo', [
            'title' => 'Registra Prestamo',
            // 'solicitantes' => $solicitantes,
            // 'libros' => $libros_actived
        ], true);
    }

    public function EditPrestamo()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('prestamos', 'index', 'danger', 'El préstamo ingresado no fue encontrado');
            return;
        }

        $id_prestamo = $_GET['id'];

        $prestamo_model = new Prestamo();
        $prestamo = $prestamo_model->getByOne('id_p', $id_prestamo);

        if ( !$prestamo ) {
            $this->redirect('prestamos', 'index', 'danger', 'El préstamo ingresado no fue encontrado');
            return;
        }

        $libro_model = new Libro();
        $prestamo->id_libro2 = $libro_model->getByOne('id_libro', $prestamo->id_libro2);

        $this->view('Prestamos/EditForm', [
            'title' => 'Información del préstamo',
            'prestamo' => $prestamo
        ], true);
    }

    public function Add()
    {
        $this->authentication($this->authentication->isAuth());

        $response = new Response(false);

        if (
            !isset($_POST['solicitante']) ||
            !isset($_POST['libro']) ||
            !isset($_POST['fecha_devolucion'])
        ) {
            $response->message = 'Los campos son requeridos';
            return $this->json($response);
        }

        $solicitante_cedula = $_POST['solicitante'];
        $libro_cota = $_POST['libro'];
        $observaciones = $_POST['observaciones'];
        $fecha_entrega = date('Y-m-d');
        $fecha_devolucion = $_POST['fecha_devolucion'];

        if ($fecha_devolucion < $fecha_entrega) {
            $response->message = 'La fecha de devolucion no puede ser menor que la fecha de entrega';
            return $this->json($response);
        }

        $solicitante_model = new Solicitante();
        $libro_model = new Libro();
        $prestamo_model = new Prestamo();

        $solicitante = $solicitante_model->getByOne('ced_sol', $solicitante_cedula);

        if ( !$solicitante ) {
            $response->message = 'El solicitante enviado no fue encontrado';
            return $this->json($response);
        }

        if ((int) $solicitante->estado_s === 0) {
            $response->message = 'El solicitante enviado se encuentra bloqueado';
            return $this->json($response);
        }

        $prestamos = $prestamo_model->getBy('numero_carnet2', $solicitante->id_sol);
        $prestamos_pendientes = array_filter($prestamos, function($prestamo) {
            return (int) $prestamo->pendiente === 0;
        });

        if (count($prestamos_pendientes) >= 3) {
            $response->message = 'El solicitante tiene préstamos pendientes, no puede realizar más préstamos';
            return $this->json($response);
        }

        $libro = $libro_model->getByOne('cota', $libro_cota);

        if ( !$libro ) {
            $response->message = 'El Libro enviado no fue encontrado';
            return $this->json($response);
        }

        $inventario_model = new Inventario();
        $inventario = $inventario_model->getByOne('id_inv', $libro->cantidad);

        $cantidad_actual = $inventario->cant_inv - 1;
        $cantidad_resto = $inventario->total_inv - $cantidad_actual;

        if ($cantidad_actual < $inventario->min_inv) {
            $response->message = 'La cantidad del libro ha llegado a su limite';
            return $this->json($response);
        }

        $new_inventario = [
            'id_inv' => $inventario->id_inv,
            'cant_inv' => $cantidad_actual,
            'total_inv' => $inventario->total_inv,
            'min_inv' => $inventario->min_inv,
            'resto_inv' => $cantidad_resto
        ];

        $inventario_model = new Inventario($new_inventario);
        $inventario_model->update();

        $new_prestamo = [
            'id_p' => null,
            'numero_carnet2' => $solicitante->id_sol,
            'id_libro2' => $libro->id_libro,
            'fecha_entrega' => $fecha_entrega,
            'fecha_devolucion' => $fecha_devolucion,
            'observaciones_p' => $observaciones,
            'pendiente' => 0,
            'calificacion' => 0
        ];

        $prestamo_model = new Prestamo($new_prestamo);
        $prestamo_model->save();

        $response->status = true;
        $response->message = '';

        $id_prestamo = $prestamo_model->lastInsertId();

        $response->data = [ 'id_prestamo' => $id_prestamo ];

        $user = $this->helpers->getSession();

        $this->audit->create('Préstamo Circulante', 'Creacion de nuevo préstamo ' . $id_prestamo, $user->id, $this->helpers->getCurrentDateTime());

        return $this->json($response);
    }

    public function editStatus()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('prestamos', 'index', 'danger', 'El préstamo ingresado no fue encontrado');
            return;
        }

        $id_prestamo = $_GET['id'];

        $prestamo_model = new Prestamo();
        $prestamo = $prestamo_model->getByOne('id_p', $id_prestamo);

        if ( !$prestamo ) {
            $this->redirect('prestamos', 'index', 'danger', 'El préstamo ingresado no fue encontrado');
            return;
        }

        if (!isset($_POST['state']) && !isset($_POST['observaciones']) && !isset($_POST['calification'])) {
            return $this->redirect('prestamos', 'editprestamo', 'danger', 'Los datos requeridos no fueron enviados', [ 'id' => $id_prestamo ]);
        }

        $state = (int) $_POST['state'];
        $observaciones = $_POST['observaciones'];
        $calification = $_POST['calification'];

        $edit_prestamo = [
            'id_p' => $prestamo->id_p,
            'numero_carnet2' => $prestamo->numero_carnet2,
            'id_libro2' => $prestamo->id_libro2,
            'fecha_entrega' => $prestamo->fecha_entrega,
            'fecha_devolucion' => $prestamo->fecha_devolucion,
            'observaciones_p' => $observaciones,
            'calificacion' => $calification,
            'pendiente' => $state
        ];

        $inventario_model = new Inventario();
        $libro_model = new Libro();

        $libro = $libro_model->getByOne('id_libro', $prestamo->id_libro2);
        $inventario_finded = $inventario_model->getByOne('id_inv', $libro->cantidad);

        if ($prestamo->pendiente !== 0 && $state === 0) {
            $cantidad_actual = (int) $inventario_finded->cant_inv - 1;
            $cantidad_faltante = (int) $inventario_finded->total_inv - $cantidad_actual;

            $edit_inventario = new Inventario([
                'id_inv' => $inventario_finded->id_inv,
                'cant_inv' => $cantidad_actual,
                'total_inv' => $inventario_finded->total_inv,
                'min_inv' => $inventario_finded->min_inv,
                'resto_inv' => $cantidad_faltante
            ]);

            $edit_inventario->update();
        }

        if ($prestamo->pendiente !== 1 && $state === 1) {
            $cantidad_actual = (int) $inventario_finded->cant_inv + 1;
            $cantidad_faltante = (int) $inventario_finded->resto_inv - 1;

            $edit_inventario = new Inventario([
                'id_inv' => $inventario_finded->id_inv,
                'cant_inv' => $cantidad_actual,
                'total_inv' => $inventario_finded->total_inv,
                'min_inv' => $inventario_finded->min_inv,
                'resto_inv' => $cantidad_faltante
            ]);

            $edit_inventario->update();
        }

        $prestamo_model = new Prestamo($edit_prestamo);

        if (!$prestamo_model->update()) {
            return $this->redirect('prestamos', 'details', 'danger', "Ocurrio un error al editar el préstamo", [ 'id' => $id_prestamo ]);
        }

        $user = $this->helpers->getSession();

        $this->audit->create('Préstamo Circulante', 'Estatus de préstamo ' . $prestamo->id_p . ' actualizado', $user->id, $this->helpers->getCurrentDateTime());

        $this->redirect('prestamos', 'details', 'success', 'El préstamo ha sido actualizado satisfactoriamente', [ 'id' => $id_prestamo ]);
    }

    public function ReturnPrestamo()
    {
        $this->authentication($this->authentication->isAuth());

        $prestamo_model = new Prestamo();
        $prestamos = $prestamo_model->getAll();

        $libro_model = new Libro();
        $solicitante_model = new Solicitante();

        foreach ($prestamos as $prestamo) {
            $prestamo->numero_carnet2 = $solicitante_model->getByOne('id_sol', $prestamo->numero_carnet2);
            $prestamo->id_libro2 = $libro_model->getByOne('id_libro', $prestamo->id_libro2);
        }

        $prestamos = array_filter($prestamos, function($prestamo) {
            return (int) $prestamo->pendiente !== 1;
        });

        usort($prestamos, function($a, $b) {
            return strcasecmp($a->fecha_devolucion, $b->fecha_devolucion);
        });

        $this->view('Prestamos/ReturnPrestamo', [
            'title' => 'Prestamos Pendientes',
            'prestamos' => $prestamos
        ], true);
    }

    public function changePrestamo()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('prestamos', 'index', 'danger', 'El préstamo ingresado no fue encontrado');
            return;
        }

        if ( !isset($_GET['observation']) ) {
            $this->redirect('prestamos', 'index', 'danger', 'La observación es requerida');
            return;
        }

        $id_prestamo = $_GET['id'];
        $observation = $_GET['observation'];
        $calification = $_GET['calification'];

        $prestamo_model = new Prestamo();
        $prestamo = $prestamo_model->getByOne('id_p', $id_prestamo);

        if ( !$prestamo ) {
            $this->redirect('prestamos', 'index', 'danger', 'El préstamo ingresado no fue encontrado');
            return;
        }

        $edit_prestamo = [
            'id_p' => $prestamo->id_p,
            'numero_carnet2' => $prestamo->numero_carnet2,
            'id_libro2' => $prestamo->id_libro2,
            'fecha_entrega' => $prestamo->fecha_entrega,
            'fecha_devolucion' => $this->helpers->getCurrentDate(),
            'observaciones_p' => $observation,
            'pendiente' => 1,
            'calificacion' => $calification
        ];

        $inventario_model = new Inventario();
        $libro_model = new Libro();

        $libro = $libro_model->getByOne('id_libro', $prestamo->id_libro2);
        $inventario_finded = $inventario_model->getByOne('id_inv', $libro->cantidad);

        $cantidad_actual = (int) $inventario_finded->cant_inv + 1;
        $cantidad_faltante = (int) $inventario_finded->resto_inv - 1;

        $edit_inventario = new Inventario([
            'id_inv' => $inventario_finded->id_inv,
            'cant_inv' => $cantidad_actual,
            'total_inv' => $inventario_finded->total_inv,
            'min_inv' => $inventario_finded->min_inv,
            'resto_inv' => $cantidad_faltante
        ]);

        $edit_inventario->update();

        $prestamo_model = new Prestamo($edit_prestamo);

        if (!$prestamo_model->update()) {
            return $this->redirect('prestamos', 'returnprestamo', 'danger', "Ocurrio un error al editar el prestamo", [ 'id' => $id_prestamo ]);
        }

        $user = $this->helpers->getSession();

        $this->audit->create('Prestamo Circulante', 'El prestamo ' . $prestamo->id_p . ' ha sido devuelto', $user->id, $this->helpers->getCurrentDateTime());

        $this->redirect('prestamos', 'returnprestamo', 'success', 'El préstamo ha sido devuelto satisfactoriamente', [ 'id' => $id_prestamo ]);
    }
}
