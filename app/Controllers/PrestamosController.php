<?php

use App\Core\baseController;
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
            $this->redirect('prestamo', 'index', 'danger', 'El prestamo ingresado no fue encontrado');
            return;
        }

        $id_prestamo = $_GET['id'];

        $prestamo_model = new Prestamo();
        $prestamo = $prestamo_model->getByOne('id_p', $id_prestamo);

        if ( !$prestamo ) {
            $this->redirect('prestamo', 'index', 'danger', 'El prestamo ingresado no fue encontrado');
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

    public function EditPrestamo()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('prestamo', 'index', 'danger', 'El prestamo ingresado no fue encontrado');
            return;
        }

        $id_prestamo = $_GET['id'];

        $prestamo_model = new Prestamo();
        $prestamo = $prestamo_model->getByOne('id_p', $id_prestamo);

        if ( !$prestamo ) {
            $this->redirect('prestamo', 'index', 'danger', 'El prestamo ingresado no fue encontrado');
            return;
        }

        $this->view('Prestamos/EditForm', [
            'title' => 'Gestion de prestamo',
            'prestamo' => $prestamo
        ], true);
    }
}
