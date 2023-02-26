<?php

use App\Core\baseController;
use App\Models\Category;
use App\Models\Inventario;
use App\Models\Libro;
use App\Utils\Authentication\InterfaceAuthentication;

class LibroController extends baseController
{
    protected $authentication;

    public function __construct(InterfaceAuthentication $authentication)
    {
        $this->authentication = $authentication;
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
        $cantidad_total = $_POST['cantidad_total'];
        $cantidad_minima = $_POST['cantidad_minima'];

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

        $libro_model = new Libro($new_libro);

        if ($libro_model->getByOne('cota', $cota)) {
            return $this->redirect('libro', 'register', 'danger', "Cota '{$cota}' no se encuentra disponible");
        }

        echo 'add...';
    }
}
