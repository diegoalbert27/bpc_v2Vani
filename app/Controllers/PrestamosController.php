<?php

use App\Core\baseController;
use App\Models\Inventario;
use App\Models\Libro;
use App\Models\Prestamo;
use App\Models\Solicitante;
use App\Utils\Authentication\InterfaceAuthentication;

class PrestamosController extends baseController
{
    protected $authentication;

    public function __construct(InterfaceAuthentication $authentication)
    {
        $this->authentication = $authentication;
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

    public function Details()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('prestamos', 'index', 'danger', 'El prestamo ingresado no fue encontrado');
            return;
        }

        $id_prestamo = $_GET['id'];

        $prestamo_model = new Prestamo();
        $prestamo = $prestamo_model->getByOne('id_p', $id_prestamo);

        if ( !$prestamo ) {
            $this->redirect('prestamos', 'index', 'danger', 'El prestamo ingresado no fue encontrado');
            return;
        }

        $solicitante_model = new Solicitante();
        $libro_model = new Libro();

        $prestamo->numero_carnet2 = $solicitante_model->getByOne('id_sol', $prestamo->numero_carnet2);

        $prestamo->id_libro2 = $libro_model->getByOne('id_libro', $prestamo->id_libro2);

        $this->view('Prestamos/Detail', [
            'title' => 'Gestion de Prestamo',
            'prestamo' => $prestamo
        ], true);
    }

    public function GeneratePrestamo()
    {
        $this->authentication($this->authentication->isAuth());

        $solicitante_model = new Solicitante();
        $solicitantes = $solicitante_model->getAll();

        $this->view('Prestamos/GeneratePrestamo', [
            'title' => 'Registra Prestamo',
            'solicitantes' => $solicitantes
        ], true);
    }

    public function EditPrestamo()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('prestamos', 'index', 'danger', 'El prestamo ingresado no fue encontrado');
            return;
        }

        $id_prestamo = $_GET['id'];

        $prestamo_model = new Prestamo();
        $prestamo = $prestamo_model->getByOne('id_p', $id_prestamo);

        if ( !$prestamo ) {
            $this->redirect('prestamos', 'index', 'danger', 'El prestamo ingresado no fue encontrado');
            return;
        }

        $this->view('Prestamos/EditForm', [
            'title' => 'Gestion de prestamo',
            'prestamo' => $prestamo
        ], true);
    }

    public function editStatus()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('prestamos', 'index', 'danger', 'El prestamo ingresado no fue encontrado');
            return;
        }

        $id_prestamo = $_GET['id'];

        $prestamo_model = new Prestamo();
        $prestamo = $prestamo_model->getByOne('id_p', $id_prestamo);

        if ( !$prestamo ) {
            $this->redirect('prestamos', 'index', 'danger', 'El prestamo ingresado no fue encontrado');
            return;
        }

        if (!isset($_POST['state']) && !isset($_POST['observaciones'])) {
            return $this->redirect('prestamos', 'editprestamo', 'danger', 'Los datos requeridos no fueron enviados', [ 'id' => $id_prestamo ]);
        }

        $state = (int) $_POST['state'];
        $observaciones = $_POST['observaciones'];

        $edit_prestamo = [
            'id_p' => $prestamo->id_p,
            'numero_carnet2' => $prestamo->numero_carnet2,
            'id_libro2' => $prestamo->id_libro2,
            'fecha_entrega' => $prestamo->fecha_entrega,
            'fecha_devolucion' => $prestamo->fecha_devolucion,
            'observaciones_p' => $observaciones,
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
            $cantidad_faltante = (int) $inventario_finded->total_inv + $cantidad_actual;

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
            return $this->redirect('prestamos', 'details', 'danger', "Ocurrio un error al editar el prestamo", [ 'id' => $id_prestamo ]);
        }

        $this->redirect('prestamos', 'details', 'success', 'El prestamo ha sido actualizado satisfactoriamente', [ 'id' => $id_prestamo ]);
    }
}
