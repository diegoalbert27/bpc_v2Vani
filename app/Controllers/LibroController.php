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
        echo json_encode($_POST);
    }
}
