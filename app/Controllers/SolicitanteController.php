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
        $this->authentication($this->authentication->isAuth());

        $this->view('Solicitantes/Register', [
            'title' => 'Registrar'
        ], true);
    }

    public function Get() {
        echo json_encode([
            'body' => 'hello world'
        ]);
    }

    public function Add() {
        if (
            !isset($_POST['nombres']) &&
            !isset($_POST['apellidos']) &&
            !isset($_POST['cedula']) &&
            !isset($_POST['edad']) &&
            !isset($_POST['sexo']) &&
            !isset($_POST['phone']) &&
            !isset($_POST['email']) &&
            !isset($_POST['address']) &&
            !isset($_POST['ocupacion']) &&
            !isset($_POST['nameOcupacion']) &&
            !isset($_POST['phoneOcupacion']) &&
            !isset($_POST['addressOcupacion'])
        ) {

        }

        if (
            empty($_POST['nombres']) &&
            empty($_POST['apellidos']) &&
            empty($_POST['cedula']) &&
            empty($_POST['edad']) &&
            empty($_POST['sexo']) &&
            empty($_POST['phone']) &&
            empty($_POST['email']) &&
            empty($_POST['address']) &&
            empty($_POST['ocupacion']) &&
            empty($_POST['nameOcupacion']) &&
            empty($_POST['phoneOcupacion']) &&
            empty($_POST['addressOcupacion'])
        ) {

        }
    }
}
