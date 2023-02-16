<?php

use App\Core\baseController;
use App\Models\Api\Response;
use App\Models\Solicitante;
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
        $response = new Response(false);

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
            $response->message = 'Los datos requeridos no fueron enviados';
            return $this->json($response);
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
            empty($_POST['ocupacion'])
        ) {
            $response->message = 'Los datos requeridos no fueron enviados';
            return $this->json($response);
        }

        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $cedula = $_POST['cedula'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $ocupacion = $_POST['ocupacion'];
        $name_ocupacion = $_POST['nameOcupacion'];
        $phone_ocupacion = $_POST['phoneOcupacion'];
        $address_ocupacion = $_POST['addressOcupacion'];

        $solicitante_model = new Solicitante();

        if ( $solicitante_model->getByOne('ced_sol', $cedula) ) {
            $response->message = "Cedula '{$cedula}' no se encuentra disponible";
            return $this->json($response);
        }

        if ( $solicitante_model->getByOne('tlf_sol', $phone) ) {
            $response->message = "'El contacto {$phone}' no se encuentra disponible";
            return $this->json($response);
        }

        if ( $solicitante_model->getByOne('corr_sol', $email) ) {
            $response->message = "El correo electronico '{$email}' no se encuentra disponible";
            return $this->json($response);
        }

        $all_solicitantes = $solicitante_model->getAll();
        $carnet = count($all_solicitantes) + 1000;

        $solicitante = [
            'id_sol' => null,
            'carnet' => $carnet,
            'nom_sol' => $nombres,
            'ape_sol' => $apellidos,
            'ced_sol' => $cedula,
            'edad_sol' => $edad,
            'tlf_sol' => $phone,
            'dir_sol' => $address,
            'corr_sol' => $email,
            'sex_sol' => $sexo,
            'ocup_sol' => $ocupacion,
            'nom_inst' => $name_ocupacion,
            'dir_inst' => $address_ocupacion,
            'tel_inst' => $phone_ocupacion,
            'estado_s' => 1,
        ];

        $solicitante_model = new Solicitante($solicitante);

        if (!$solicitante_model->save()) {
            $response->message = 'Ups! Algo salio mal';
            return $this->json($response);
        }

        $response->status = true;
        $response->message = 'El solicitante ha sido registrado exitosamente';

        $id_solicitante = $solicitante_model->lastInsertId();
        $solicitante_saved = $solicitante_model->getByOne('id_sol', $id_solicitante);

        $response->data = $solicitante_saved;

        return $this->json($response);
    }
}
