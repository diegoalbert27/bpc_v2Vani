<?php

use App\Core\baseController;
use App\Core\helpers;
use App\Models\News;
use App\Models\NewsImage;
use App\Utils\Authentication\InterfaceAuthentication;
use App\Utils\Pdf\InterfacePdf;

use App\Models\Event;
use App\Models\User;

class NewsController extends baseController {
    protected $authentication;
    protected $pdf;
    protected $helpers;

    public function __construct(InterfaceAuthentication $authentication, InterfacePdf $pdf)
    {
        $this->authentication = $authentication;
        $this->pdf = $pdf;

        $this->helpers = new helpers();
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
            'date_new' => $date,
            'id_event' => null
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

        $news_image_model = new NewsImage();
        $news_images = $news_image_model->getBy('id_new', $new->id_new) ?: [];

        $this->view('News/Detalle', [
            'title' => 'Registro Noticias',
            'new' => $new,
            'news_images' => $news_images
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
            'date_new' => $date,
            'id_event' => null
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

    public function EventNewForm()
    {
        $this->authentication($this->authentication->isAuth());

        $id_event = $_GET['id'];

        $event_model = new Event();
        $event = $event_model->getByOne('id_event', $id_event);

        $user_model = new User();
        $event->organizer_event = $user_model->getByOne('id', $event->organizer_event);

        $new_model = new News();

        if ( $new_model->getByOne('id_event', $id_event) ) {
            return $this->redirect('news', 'index', 'danger', 'El evento ya tiene una noticia asignada');
        }

        $this->view('News/Event', [
            'title' => 'Registro de noticias de eventos',
            'event' => $event,
        ], true);
    }

    public function addEventNew()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('news', 'EventNewForm', 'danger', 'El evento ingresado no fue encontrado');
            return;
        }

        $id_event = $_GET['id'];

        $new_images = $_FILES['new_images'];
        $uploads = [];

        foreach($new_images['name'] as $index => $image) {
            if ( !$this->helpers->validateImage($new_images['type'][$index]) ) {
                return $this->redirect('news', 'eventNewForm', 'danger', 'Las imagenes deben de ser de una extension valida como jpeg, png o gif', [ 'id' => $id_event ]);
            }

            // if ( $new_images['size'][$index] > 500 * (1048576) ) {
            //     return $this->redirect('news', 'eventNewForm', 'danger', 'Las imagenes deben de ser menor que 500 MB', [ 'id' => $id_event ]);
            // }

            $file = [
                'name' => $image,
                'type' => $new_images['type'][$index],
                'tmp_name' => $new_images['tmp_name'][$index],
                'size' => $new_images['size'][$index]
            ];

            array_push($uploads, $file);
        }

        $title = $_POST['title'];
        $autor = $_POST['autor'];
        $date = $_POST['date'];
        $content = $_POST['content'];

        $new_model = new News([
            'id_new' => null,
            'title_new' => $title,
            'author_new' => $autor,
            'content_new' => $content,
            'date_new' => $date,
            'id_event' => $id_event
        ]);

        if ($new_model->save()) {
            $public_file_urls = $this->helpers->uploadsFiles('news_image', $uploads);

            if ($public_file_urls === false) {
                return $this->redirect('news', 'eventNewForm', 'danger', 'Ups! Hubo un error al subir los archivos verifique los accesos de los directorios', [ 'id' => $id_event ]);
            }

            $id_new = $new_model->lastInsertId();

            foreach ($public_file_urls as $url) {
                $image = [
                    'id_new_image' => null,
                    'url' => $url,
                    'id_new' => $id_new
                ];

                $news_image = new NewsImage($image);
                $news_image->save();
            }

            $this->redirect('news', 'index', 'success', 'Noticia registrada con exito');
        } else {
            $this->redirect('news', 'eventNewForm', 'danger', 'Ups! hubo un error al registra la noticia', [ 'id' => $id_event ]);
        }
    }

    public function DeleteNewImage()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('news', 'detalle', 'danger', 'La Imagen No Fue Encontrada');
            return;
        }

        $id_image = $_GET['id'];

        $news_image = new NewsImage();
        $image = $news_image->getByOne('id_new_image', $id_image);

        $urls = explode('/', $image->url);
        $id_image_file = $urls[count($urls) - 1];

        $is_removed = $this->helpers->removeUploadFile('news_image', $id_image_file);

        if ( !$is_removed ) {
            $this->redirect('news', 'detalle', 'danger', 'La imagen no pudo ser eliminada, revisar permisos en el archivo');
            return;
        }

        $news_image->deleteBy('id_new_image', $id_image);

        $this->redirect('news', 'detalle', 'success', 'La imagen ha sido eliminada satisfactoriamente', [ 'id' => $image->id_new ]);
    }

    public function AddNewsImages()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('news', 'index', 'danger', 'La noticia No Fue Encontrada');
            return;
        }

        $id_new = $_GET['id'];

        $new_images = $_FILES['news_images'];
        $uploads = [];

        foreach($new_images['name'] as $index => $image) {
            if ( !$this->helpers->validateImage($new_images['type'][$index]) ) {
                return $this->redirect('news', 'detalle', 'danger', 'Las imagenes deben de ser de una extension valida como jpeg, png o gif', [ 'id' => $id_new ]);
            }

            // if ( $new_images['size'][$index] > 500 * (1048576) ) {
            //     return $this->redirect('news', 'detalle', 'danger', 'Las imagenes deben de ser menor que 500 MB', [ 'id' => $id_new ]);
            // }

            $file = [
                'name' => $image,
                'type' => $new_images['type'][$index],
                'tmp_name' => $new_images['tmp_name'][$index],
                'size' => $new_images['size'][$index]
            ];

            array_push($uploads, $file);
        }

        $public_file_urls = $this->helpers->uploadsFiles('news_image', $uploads);

        if ($public_file_urls === false) {
            $this->redirect('news', 'detalle', 'danger', 'Ups! Hubo un error al subir los archivos verifique los accesos de los directorios', [ 'id' => $id_new ]);
        }

        foreach ($public_file_urls as $url) {
            $image = [
                'id_new_image' => null,
                'url' => $url,
                'id_new' => $id_new
            ];

            $news_image = new NewsImage($image);
            $news_image->save();
        }

        $this->redirect('news', 'detalle', 'success', 'Imagenes registradas con exito', [ 'id' => $id_new ]);
    }
}
