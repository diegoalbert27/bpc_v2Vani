<?php

use App\Core\baseController;
use App\Models\Organizer;
use App\Models\Role;
use App\Models\User;
use App\Utils\Authentication\InterfaceAuthentication;

class OrganizerController extends baseController
{
    protected $authentication;

    public function __construct(InterfaceAuthentication $authentication)
    {
        $this->authentication = $authentication;
    }

    public function Index()
    {
        $this->authentication($this->authentication->isAuth());

        $organizer_model = new Organizer;
        $organizers = $organizer_model->getAll();

        $user = new User();
        $role_model = new Role();

        foreach($organizers as $organizer) {
            $organizer->id_user = $user->getByOne('id', $organizer->id_user);
            $organizer->id_user->role = $role_model->getByOne('id', $organizer->id_user->role);
        }

        $this->view('Organizer/Inicio', [
            'title' => 'Organizadores',
            'organizers' => $organizers
        ], true);
    }

    public function EditStatus()
    {
        $this->authentication($this->authentication->isAuth());

        if (
            !isset($_GET['id']) ||
            !isset($_GET['status'])
        ) {
            return $this->redirect('organizer', 'index', 'danger', 'Los campos son requeridos');
        }

        if (
            empty($_GET['id'])
        ) {
            return $this->redirect('organizer', 'index', 'danger', 'El organizador no esta activo');
        }

        $id_organizer = $_GET['id'];
        $status = $_GET['status'];

        $organizer_model = new Organizer([
            'id' => $id_organizer,
            'id_user' => null,
            'is_actived' => $status
        ]);

        if (!$organizer_model->updateStatus()) {
            return $this->redirect('organizer', 'index', 'danger', 'Ops! Salio algo mal');
        }

        $this->redirect('organizer', 'index', 'success', 'El organizador ha sido actualizado con exito');
    }
}
