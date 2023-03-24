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
}
