<?php

use App\Core\baseController;
use App\Utils\Authentication\InterfaceAuthentication;

class SolicitanteController extends baseController
{
    protected $authentication;
    public function __construct(InterfaceAuthentication $authentication)
    {
        $this->authentication = $authentication;
    }

    public function Register()
    {
        $this->view('Solicitantes/Register', [
            'title' => 'Registrar'
        ], true);
    }
}
