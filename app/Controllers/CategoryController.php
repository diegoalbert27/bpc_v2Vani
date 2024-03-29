<?php

use App\Core\baseController;
use App\Models\Category;
use App\Utils\Authentication\InterfaceAuthentication;
use App\Utils\Pdf\InterfacePdf;

class CategoryController extends baseController
{
    protected $authentication;
    protected $pdf;
    public function __construct(InterfaceAuthentication $authentication, InterfacePdf $pdf)
    {
        $this->authentication = $authentication;
        $this->pdf = $pdf;
    }

    public function Index()
    {
        $this->authentication($this->authentication->isAuth());

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->view('Categorias/Inicio', [
            'categories' => $categories,
            'title' => 'Categoría'
        ], true);
    }

    public function Create()
    {
        $this->authentication($this->authentication->isAuth());

        if (
            !isset($_POST['category']) ||
            !isset($_POST['ubication'])
        ) {
            $this->redirect('category', 'index', 'warning', 'Los datos requeridos no fueron enviados');
            return;
        }

        if (
            empty($_POST['category']) ||
            empty($_POST['ubication'])
        ) {
            $this->redirect('category', 'index', 'warning', 'Debe llenar todo el formulario para el registro');
            return;
        }

        $name = $_POST['category'];
        $ubication = $_POST['ubication'];

        $enabled = 1;

        $category = [
            'id' => null,
            'name' => $name,
            'ubication' => $ubication,
            'enabled' => $enabled
        ];

        $category_model = new Category($category);

        $category_finded = $category_model->getByOne('name', $name);

        if ($category_finded !== false) {
            $this->redirect('category', 'index', 'danger', 'El nombre ingresado ya se encuentra utilizado');
            return;
        }

        if (!$category_model->save()) {
            $this->redirect('category', 'index', 'danger', 'Ups! Algo salio mal');
            return;
        }

        $this->redirect('category', 'index', 'success', 'La categoría ha sido registrado exitosamente');
    }

    public function EditForm()
    {
        $this->authentication($this->authentication->isAuth());

        if (!isset($_GET['id'])) {
            $this->redirect('category', 'index', 'danger', 'La categoría ingresada no fue encontrado');
            return;
        }

        $id_category = $_GET['id'];

        $category_model = new Category();
        $category_finded = $category_model->getByOne('id', $id_category);

        if ($category_finded === false) {
            $this->redirect('category', 'index', 'danger', 'La categoría ingresada no fue encontrado');
            return;
        }

        $this->view('Categorias/EditForm', [
            'title' => 'Editar Categoría',
            'category' => $category_finded,
        ], true);
    }

    public function Edit()
    {
        $this->authentication($this->authentication->isAuth());

        if (
            !isset($_POST['id']) ||
            !isset($_POST['category']) ||
            !isset($_POST['ubication']) ||
            !isset($_POST['enabled'])
        ) {
            $this->redirect('category', 'index', 'warning', 'Los datos requeridos no fueron enviados');
            return;
        }

        if (
            empty($_POST['id']) ||
            empty($_POST['category']) ||
            empty($_POST['ubication'])
        ) {
            $this->redirect('category', 'index', 'warning', 'Debe llenar todo el formulario para el registro');
            return;
        }

        $id_category = $_POST['id'];
        $name = $_POST['category'];
        $ubication = $_POST['ubication'];
        $enabled = $_POST['enabled'];

        $category = [
            'id' => $id_category,
            'name' => $name,
            'ubication' => $ubication,
            'enabled' => $enabled
        ];

        $category_model = new Category();
        $category_finded = $category_model->getByOne('id', $id_category);

        if ($category_finded === false) {
            $this->redirect('category', 'index', 'danger', 'La categoría ingresada no fue encontrado');
            return;
        }

        $category_model = new Category($category);

        $category_model->update();

        $this->redirect('category', 'index', 'success', "La categoría ha sido actualizada exitosamente");
    }

    public function GetReportPdf()
    {
        $this->authentication($this->authentication->isAuth());

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->pdf->getReporteCategories([ 'categories' => $categories ]);
    }
}
