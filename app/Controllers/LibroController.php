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
use App\Utils\Pdf\InterfacePdf;

class LibroController extends baseController
{
    protected $authentication;
    protected $pdf;
    protected $audit;
    public $helpers;

    public function __construct(InterfaceAuthentication $authentication, InterfacePdf $pdf, InterfaceAudit $audit)
    {
        $this->authentication = $authentication;
        $this->pdf = $pdf;
        $this->audit = $audit;

        $this->helpers = new helpers();
    }

    public function Index()
    {
        $this->authentication($this->authentication->isAuth());

        $libro_model = new Libro();
        $libros = $libro_model->getAll();

        $category_model = new Category();
        $inventario_model = new Inventario();

        foreach ($libros as $libro) {
            $category = $category_model->getByOne('id', $libro->categoria);

            if ($category) {
                $libro->categoria = $category;
            }

            $inventario = $inventario_model->getByOne('id_inv', $libro->cantidad);

            if ($inventario) {
                $libro->cantidad = $inventario;
            }
        }

        $this->view('Libros/Inicio', [
            'title' => 'Libros',
            'libros' => $libros
        ], true);
    }

    public function Get()
    {
        $this->authentication($this->authentication->isAuth());

        $libro_model = new Libro();
        $libros = $libro_model->getAll();

        $category_model = new Category();

        foreach ($libros as $libro) {
            $category = $category_model->getByOne('id', $libro->categoria);

            if ($category) {
                $libro->categoria = $category;
            }
        }

        $response = new Response(true, '', $libros);

        return $this->json($response);
    }

    public function Register()
    {
        $this->authentication($this->authentication->isAuth());

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->view('Libros/Register', [
            'title' => 'Registrar',
            'categories' => $categories
        ], true);
    }

    public function Add()
    {
        $this->authentication($this->authentication->isAuth());

        if (
            !isset($_POST['cota']) &&
            !isset($_POST['title']) &&
            !isset($_POST['category']) &&
            !isset($_POST['autor']) &&
            !isset($_POST['state']) &&
            !isset($_POST['sinopsis']) &&
            !isset($_POST['cantidad_total']) &&
            !isset($_POST['cantidad_minima'])
        ) {
            return $this->redirect('libro', 'register', 'danger', 'Los datos requeridos no fueron enviados');
        }

        if (
            empty($_POST['cota']) &&
            empty($_POST['title']) &&
            empty($_POST['category']) &&
            empty($_POST['autor']) &&
            empty($_POST['state']) &&
            empty($_POST['sinopsis']) &&
            empty($_POST['cantidad_total']) &&
            empty($_POST['cantidad_minima'])
        ) {
            return $this->redirect('libro', 'register', 'danger', 'Los datos requeridos no fueron enviados');
        }

        $cota = $_POST['cota'];
        $title = $_POST['title'];
        $category = $_POST['category'];
        $autor = $_POST['autor'];
        $state = $_POST['state'];
        $sinopsis = $_POST['sinopsis'];
        $cantidad_total = (int) $_POST['cantidad_total'];
        $cantidad_minima = (int) $_POST['cantidad_minima'];

        $new_libro = [
            'id_libro' => null,
            'cota' => $cota,
            'titulo' => $title,
            'autor' => $autor,
            'categoria' => $category,
            'estado_libro' => $state,
            'sinopsis' => $sinopsis,
            'cantidad' => null
        ];

        $libro_model = new Libro();

        if ($libro_model->getByOne('cota', $cota)) {
            return $this->redirect('libro', 'register', 'danger', "Cota '{$cota}' no se encuentra disponible");
        }

        if ($cantidad_total <= $cantidad_minima) {
            return $this->redirect('libro', 'register', 'danger', "La cantidad total del libro no debe ser menor o igual que la cantidad minima enviada");
        }

        $inventario = [
            'id_inv' => null,
            'cant_inv' => $cantidad_total,
            'total_inv' => $cantidad_total,
            'min_inv' => $cantidad_minima,
            'resto_inv' => 0
        ];

        $inventario_model = new Inventario($inventario);

        if (!$inventario_model->save()) {
            return $this->redirect('libro', 'register', 'danger', "Ocurrio un error al guardar el valor del inventario");
        }

        $new_libro['cantidad'] = $inventario_model->lastInsertId();

        $libro_model = new Libro($new_libro);

        if (!$libro_model->save()) {
            return $this->redirect('libro', 'register', 'danger', "Ocurrio un error al guardar el libro");
        }

        $id_libro = $libro_model->lastInsertId();

        $user = $this->helpers->getSession();

        $this->audit->create('Libros', 'Creacion de nuevo libro ' . $id_libro, $user->id, $this->helpers->getCurrentDateTime());

        $this->redirect('libro', 'detalle', 'success', 'El libro ha sido registrado satisfactoriamente', [ 'id' => $id_libro ]);
    }

    public function Detalle()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('libro', 'index', 'danger', 'El libro ingresado no fue encontrado');
            return;
        }

        $id_libro = $_GET['id'];

        $libro_model = new Libro();
        $libro = $libro_model->getByOne('id_libro', $id_libro);

        $category = new Category();
        $libro->categoria = $category->getByOne('id', $libro->categoria);

        $inventario_model = new Inventario();
        $libro->cantidad = $inventario_model->getByOne('id_inv', $libro->cantidad);

        $this->view('Libros/Detalle', [
            'title' => 'Informacion',
            'libro' => $libro
        ], true);
    }

    public function EditLibro()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('libro', 'index', 'danger', 'El libro ingresado no fue encontrado');
            return;
        }

        $id_libro = $_GET['id'];

        $libro_model = new Libro();
        $libro = $libro_model->getByOne('id_libro', $id_libro);

        $category_model = new Category();
        $categorias = $category_model->getAll();

        foreach ($categorias as $index => $categoria) {
            if ($categoria->id === $libro->categoria) {
                unset($categorias[$index]);
                array_unshift($categorias, $categoria);
            }
        }

        $estado_libro = [
            'Disponible para su lectura',
            'Disponible para su lectura y prestamo',
            'No disponible'
        ];

        foreach ($estado_libro as $index => $estado) {
            if ($estado === $libro->estado_libro) {
                unset($estado_libro[$index]);
                array_unshift($estado_libro, $estado);
            }
        }

        $this->view('Libros/EditLibro', [
            'title' => 'Editar Libro',
            'libro' => $libro,
            'categorias' => $categorias,
            'estado_libro' => $estado_libro
        ], true);
    }

    public function Edit()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('libro', 'index', 'danger', 'El libro ingresado no fue encontrado');
            return;
        }

        $id_libro = $_GET['id'];

        $libro_model = new Libro();
        $libro = $libro_model->getByOne('id_libro', $id_libro);

        if (
            !isset($_POST['cota']) &&
            !isset($_POST['title']) &&
            !isset($_POST['category']) &&
            !isset($_POST['autor']) &&
            !isset($_POST['state']) &&
            !isset($_POST['sinopsis'])
        ) {
            return $this->redirect('libro', 'editlibro', 'danger', 'Los datos requeridos no fueron enviados', [ 'id' => $id_libro ]);
        }

        if (
            empty($_POST['cota']) &&
            empty($_POST['title']) &&
            empty($_POST['category']) &&
            empty($_POST['autor']) &&
            empty($_POST['state']) &&
            empty($_POST['sinopsis'])
        ) {
            return $this->redirect('libro', 'editlibro', 'danger', 'Los datos requeridos no fueron enviados', [ 'id' => $id_libro ]);
        }

        $cota = $_POST['cota'];
        $title = $_POST['title'];
        $category = $_POST['category'];
        $autor = $_POST['autor'];
        $state = $_POST['state'];
        $sinopsis = $_POST['sinopsis'];

        $edit_libro = [
            'id_libro' => $id_libro,
            'cota' => $cota,
            'titulo' => $title,
            'autor' => $autor,
            'categoria' => $category,
            'estado_libro' => $state,
            'sinopsis' => $sinopsis,
            'cantidad' => $libro->cantidad
        ];

        if ($libro_model->getByOne('cota', $cota) && $libro->cota !== $cota) {
            return $this->redirect('libro', 'editlibro', 'danger', "Cota '{$cota}' no se encuentra disponible", [ 'id' => $id_libro ]);
        }

        $libro_model = new Libro($edit_libro);

        if (!$libro_model->update()) {
            return $this->redirect('libro', 'editlibro', 'danger', "Ocurrio un error al editar el libro", [ 'id' => $id_libro ]);
        }

        $user = $this->helpers->getSession();

        $this->audit->create('Libros', 'Actualizado de libro ' . $cota, $user->id, $this->helpers->getCurrentDateTime());

        $this->redirect('libro', 'detalle', 'success', 'El libro ha sido actualizado satisfactoriamente', [ 'id' => $id_libro ]);
    }

    public function CantidadForm()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('libro', 'index', 'danger', 'El inventario del libro no fue encontrado');
            return;
        }

        $id_inventario = $_GET['id'];

        $inventario_model = new Inventario();
        $inventario = $inventario_model->getByOne('id_inv', $id_inventario);

        $this->view('Libros/CantidadForm', [
            'title' => 'Editar Cantidad del Libro',
            'inventario' => $inventario,
        ], true);
    }

    public function EditCantidad()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('libro', 'index', 'danger', 'El inventario del libro no fue encontrado');
            return;
        }

        $id_inventario = $_GET['id'];

        $inventario_model = new Inventario();

        if (
            !isset($_POST['cantidad_actual']) &&
            !isset($_POST['cantidad_minima']) &&
            !isset($_POST['cantidad_total']) &&
            !isset($_POST['cantidad_resto'])
        ) {
            return $this->redirect('libro', 'cantidadform', 'danger', 'Los datos requeridos no fueron enviados', [ 'id' => $id_inventario ]);
        }

        if (
            empty($_POST['cantidad_actual']) &&
            empty($_POST['cantidad_minima']) &&
            empty($_POST['cantidad_total']) &&
            empty($_POST['cantidad_resto'])
        ) {
            return $this->redirect('libro', 'cantidadform', 'danger', 'Los datos requeridos no fueron enviados', [ 'id' => $id_inventario ]);
        }

        $cantidad_actual = $_POST['cantidad_actual'];
        $cantidad_minima = $_POST['cantidad_minima'];
        $cantidad_total = $_POST['cantidad_total'];
        $cantidad_resto = $_POST['cantidad_resto'];

        if ($cantidad_total <= $cantidad_minima) {
            return $this->redirect('libro', 'cantidadform', 'danger', "La cantidad total del libro no debe ser menor o igual que la cantidad minima enviada", [ 'id' => $id_inventario ]);
        }

        $edit_inventario = [
            'id_inv' => $id_inventario,
            'cant_inv' => $cantidad_actual,
            'total_inv' => $cantidad_total,
            'min_inv' => $cantidad_minima,
            'resto_inv' => $cantidad_resto
        ];

        $inventario_model = new Inventario($edit_inventario);

        if (!$inventario_model->update()) {
            return $this->redirect('libro', 'cantidadform', 'danger', "Ocurrio un error al editar la cantidad del libro", [ 'id' => $id_inventario ]);
        }

        $libro_model = new Libro();
        $libro = $libro_model->getByOne('cantidad', $id_inventario);

        $user = $this->helpers->getSession();

        $this->audit->create('Libros', 'El inventario del libro ' . $libro->cota . ' ha sido actualizada', $user->id, $this->helpers->getCurrentDateTime());

        $this->redirect('libro', 'detalle', 'success', 'La cantidad del libro ha sido actualizado satisfactoriamente', [ 'id' => $libro->id_libro ]);
    }

    public function GetReportPdf()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('libro', 'index', 'danger', 'El libro ingresado no fue encontrado');
            return;
        }

        $id_libro = $_GET['id'];

        $libro_model = new Libro();
        $libro = $libro_model->getByOne('id_libro', $id_libro);

        $category_model = new Category();
        $libro->categoria = $category_model->getByOne('id', $libro->categoria);

        $inventario_model = new Inventario();
        $libro->cantidad = $inventario_model->getByOne('id_inv', $libro->cantidad);

        $prestamo_model = new Prestamo();
        $prestamos_by_libro = $prestamo_model->getBy('id_libro2', $libro->id_libro);

        $solicitante_model = new Solicitante();

        foreach($prestamos_by_libro as $prestamo) {
            $prestamo->numero_carnet2 = $solicitante_model->getByOne('id_sol', $prestamo->numero_carnet2);
        }

        $this->pdf->getReporteLibro([ 'libro' => $libro, 'prestamos' => $prestamos_by_libro ]);
    }
}
