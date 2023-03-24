<?php

use App\Core\baseController;
use App\Models\News;
use App\Utils\Authentication\InterfaceAuthentication;
use App\Utils\Pdf\InterfacePdf;

class NewsController extends baseController {
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

        $new_model = new News();
        $news = $new_model->getAll();

        $this->view('News/Inicio', [
            'title' => 'Noticias',
            'news' => $news
        ], true);
    }

    public function Register()
    {
        $this->authentication($this->authentication->isAuth());

        $this->view('News/Register', [
            'title' => 'Registro Noticias'
        ], true);
    }

    public function Add()
    {
        $this->authentication($this->authentication->isAuth());

        $title = $_POST['title'];
        $autor = $_POST['autor'];
        $date = $_POST['date'];
        $content = $_POST['content'];

        $new_model = new News([
            'id_new' => null,
            'title_new' => $title,
            'author_new' => $autor,
            'content_new' => $content,
            'date_new' => $date
        ]);

        $new_model->save();

        $this->redirect('news', 'index', 'success', 'Noticia registrada con exito');
    }

    public function EditForm()
    {
        $this->authentication($this->authentication->isAuth());

        $id_new = $_GET['id'];

        $new_model = new News();
        $new = $new_model->getByOne('id_new', $id_new);

        $this->view('News/EditForm', [
            'title' => 'Registro Noticias',
            'new' => $new
        ], true);
    }

    public function Detalle()
    {
        $this->authentication($this->authentication->isAuth());

        $id_new = $_GET['id'];

        $new_model = new News();
        $new = $new_model->getByOne('id_new', $id_new);

        $this->view('News/Detalle', [
            'title' => 'Registro Noticias',
            'new' => $new
        ], true);
    }

    public function Delete()
    {
        $this->authentication($this->authentication->isAuth());

        $id_new = $_GET['id'];

        $new_model = new News();

        if ($new_model->deleteBy('id_new', $id_new)) {
            $this->redirect('news', 'index', 'danger', 'Noticia eliminada con exito');
        }
    }

    public function Edit()
    {
        $this->authentication($this->authentication->isAuth());

        $id_new = $_GET['id'];

        $title = $_POST['title'];
        $autor = $_POST['autor'];
        $date = $_POST['date'];
        $content = $_POST['content'];

        $new_model = new News([
            'id_new' => $id_new,
            'title_new' => $title,
            'author_new' => $autor,
            'content_new' => $content,
            'date_new' => $date
        ]);

        if ($new_model->update()) {
            $this->redirect('news', 'index', 'success', 'Noticia Actualizada con exito');
        }
    }

    public function GetReportPdf()
    {
        $this->authentication($this->authentication->isAuth());

        $id_new = $_GET['id'];

        $new_model = new News();
        $new = $new_model->getByOne('id_new', $id_new);

        $this->pdf->getReporteNew([ 'new' => $new ]);
    }
}
