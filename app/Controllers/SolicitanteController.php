<?php

use App\Core\baseController;
use App\Core\helpers;
use App\Models\Api\Response;
use App\Models\Libro;
use App\Models\Prestamo;
use App\Models\Solicitante;
use App\Utils\Authentication\InterfaceAuthentication;
use App\Utils\Audit\InterfaceAudit;
use App\Utils\Pdf\InterfacePdf;

class SolicitanteController extends baseController
{
    protected $authentication;
    protected $pdf;
    protected $audit;
    public $helpers;

    public function __construct(InterfaceAuthentication $authentication, InterfacePdf $pdf, InterfaceAudit $audit)
    {
        $this->authentication = $authentication;
        $this->pdf = $pdf;
        $this->audit = $audit;

        $this->helpers = new helpers();
    }

    public function Index()
    {
        $this->authentication($this->authentication->isAuth());

        $solicitante_model = new Solicitante();
        $solicitantes = $solicitante_model->getAll();

        $this->view('Solicitantes/Inicio', [
            'title' => 'Solicitantes',
            'solicitantes' => $solicitantes
        ], true);
    }

    public function Get()
    {
        $this->authentication($this->authentication->isAuth());

        $solicitante_model = new Solicitante();
        $solicitantes = $solicitante_model->getAll();

        $response = new Response(true, '', $solicitantes);

        return $this->json($response);
    }

    public function Register()
    {
        $this->authentication($this->authentication->isAuth());

        $this->view('Solicitantes/Register', [
            'title' => 'Registrar'
        ], true);
    }

    public function Detail()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('solicitante', 'index', 'danger', 'El solicitante ingresado no fue encontrado');
            return;
        }

        $id_solicitante = $_GET['id'];

        $solicitante_model = new Solicitante();
        $solicitante = $solicitante_model->getByOne('id_sol', $id_solicitante);

        $reputation = 0;

        $prestamo_model = new Prestamo();
        $prestamos = $prestamo_model->getBy('numero_carnet2', $solicitante->id_sol);

        $total_calification_prestamos = 0;

        if (count($prestamos) > 0) {
            foreach ($prestamos as $prestamo) {
                $total_calification_prestamos += $prestamo->calificacion;
            }

            if ($total_calification_prestamos < 0) {
                $reputation = -1;
            }

            if ($total_calification_prestamos > 0) {
                $reputation = 1;
            }
        }

        $this->view('Solicitantes/Detalle', [
            'title' => 'Información',
            'solicitante' => $solicitante,
            'reputation' => $reputation
        ], true);
    }

    public function Add()
    {
        $this->authentication($this->authentication->isAuth());

        $response = new Response(false);

        if (
            !isset($_POST['carnet']) &&
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
            empty($_POST['carnet']) &&
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

        $carnet = $_POST['carnet'];
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
            $response->message = "Cédula '{$cedula}' no se encuentra disponible";
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

        if ( $solicitante_model->getByOne('carnet', $carnet) ) {
            $response->message = "El nro. carnet '{$carnet}' no se encuentra disponible";
            return $this->json($response);
        }

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

        $user = $this->helpers->getSession();

        $this->audit->create('Solicitante', 'Creacion de nuevo solicitante ' . $id_solicitante, $user->id, $this->helpers->getCurrentDateTime());

        $response->data = $solicitante_saved;

        return $this->json($response);
    }

    public function FormPersonal()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('solicitante', 'index', 'danger', 'El solicitante ingresado no fue encontrado');
            return;
        }

        $id_solicitante = $_GET['id'];

        $solicitante_model = new Solicitante();
        $solicitante = $solicitante_model->getByOne('id_sol', $id_solicitante);

        $sexos = [
            'Masculino',
            'Femenino',
            'Otros'
        ];

        foreach ($sexos as $index => $sexo) {
            if ($sexo === $solicitante->sex_sol) {
                unset($sexos[$index]);
                array_unshift($sexos, $sexo);
            }
        }

        $this->view('Solicitantes/FormPersonal', [
            'title' => 'Editar Información Personal',
            'solicitante' => $solicitante,
            'sexos' => $sexos
        ], true);
    }

    public function EditPersonal()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_POST['id']) ) {
            $this->redirect('solicitante', 'index', 'danger', 'El solicitante ingresado no fue encontrado');
            return;
        }

        $id_solicitante = $_POST['id'];

        if (
            !isset($_POST['carnet']) &&
            !isset($_POST['nombres']) &&
            !isset($_POST['apellidos']) &&
            !isset($_POST['cedula']) &&
            !isset($_POST['edad']) &&
            !isset($_POST['sexo']) &&
            !isset($_POST['state'])
        ) {
            $this->redirect('solicitante', 'formpersonal', 'danger', 'Los campos enviados son requeridos', [ 'id' => $id_solicitante ]);
            return;
        }

        if (
            empty($_POST['carnet']) &&
            empty($_POST['nombres']) &&
            empty($_POST['apellidos']) &&
            empty($_POST['cedula']) &&
            empty($_POST['edad']) &&
            empty($_POST['sexo'])
        ) {
            $this->redirect('solicitante', 'formpersonal', 'danger', 'Los campos enviados son requeridos', [ 'id' => $id_solicitante ]);
            return;
        }

        $solicitante_model = new Solicitante();
        $solicitante = $solicitante_model->getByOne('id_sol', $id_solicitante);

        if ( !$solicitante ) {
            $this->redirect('solicitante', 'index', 'danger', 'El solicitante ingresado no fue encontrado');
            return;
        }

        $carnet = $_POST['carnet'];
        $nombres = $_POST['names'];
        $apellidos = $_POST['lastNames'];
        $cedula = $_POST['cedula'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];
        $state = $_POST['state'];

        if ( $solicitante_model->getByOne('ced_sol', $cedula) && (int) $cedula !== (int) $solicitante->ced_sol ) {
            $this->redirect('solicitante', 'formpersonal', 'danger', "Cédula '{$cedula}' no se encuentra disponible", [ 'id' => $id_solicitante ]);
            return;
        }

        if ( $solicitante_model->getByOne('carnet', $carnet) && (int) $carnet !== (int) $solicitante->carnet ) {
            $this->redirect('solicitante', 'formpersonal', 'danger', " 'El nro. carnet '{$carnet}' no se encuentra disponible", [ 'id' => $id_solicitante ]);
            return;
        }

        $new_personal_data = [
            'carnet' => $carnet,
            'nom_sol' => $nombres,
            'ape_sol' => $apellidos,
            'ced_sol' => $cedula,
            'edad_sol' => $edad,
            'sex_sol' => $sexo,
            'estado_s' => $state
        ];

        $solicitante_model->updatePersonalData($new_personal_data, $id_solicitante);

        $user = $this->helpers->getSession();

        $this->audit->create('Solicitante', 'Actualizacion de datos del solicitantes solicitante ' . $cedula, $user->id, $this->helpers->getCurrentDateTime());

        $this->redirect('solicitante', 'Detail', 'success', "Los datos personales del solicitante han sido actualizado exitosamente", [ 'id' => $id_solicitante ]);
    }

    public function FormContact()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('solicitante', 'index', 'danger', 'El solicitante ingresado no fue encontrado');
            return;
        }

        $id_solicitante = $_GET['id'];

        $solicitante_model = new Solicitante();
        $solicitante = $solicitante_model->getByOne('id_sol', $id_solicitante);

        $this->view('Solicitantes/FormPersonalContact', [
            'title' => 'Editar Información de Contacto',
            'solicitante' => $solicitante
        ], true);
    }

    public function EditPersonalContact()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_POST['id']) ) {
            $this->redirect('solicitante', 'index', 'danger', 'El solicitante ingresado no fue encontrado');
            return;
        }

        $id_solicitante = $_POST['id'];

        if (
            !isset($_POST['phone']) &&
            !isset($_POST['email']) &&
            !isset($_POST['address'])
        ) {
            $this->redirect('solicitante', 'formcontact', 'danger', 'Los campos enviados son requeridos', [ 'id' => $id_solicitante ]);
            return;
        }

        if (
            empty($_POST['phone']) &&
            empty($_POST['email']) &&
            empty($_POST['address'])
        ) {
            $this->redirect('solicitante', 'formcontact', 'danger', 'Los campos enviados son requeridos', [ 'id' => $id_solicitante ]);
            return;
        }

        $solicitante_model = new Solicitante();
        $solicitante = $solicitante_model->getByOne('id_sol', $id_solicitante);

        if ( !$solicitante ) {
            $this->redirect('solicitante', 'index', 'danger', 'El solicitante ingresado no fue encontrado');
            return;
        }

        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        if ( $solicitante_model->getByOne('tlf_sol', $phone) && $phone !== $solicitante->tlf_sol ) {
            $this->redirect('solicitante', 'formcontact', 'danger', "El numero de teléfono '{$phone}' no se encuentra disponible", [ 'id' => $id_solicitante ]);
            return;
        }

        if ( $solicitante_model->getByOne('corr_sol', $email) && $email !== $solicitante->corr_sol ) {
            $this->redirect('solicitante', 'formcontact', 'danger', "El correo electronico '{$email}' no se encuentra disponible", [ 'id' => $id_solicitante ]);
            return;
        }

        $new_personal_contact_data = [
            'tlf_sol' => $phone,
            'corr_sol' => $email,
            'dir_sol' => $address,
        ];

        $solicitante_model->updatePersonalContactData($new_personal_contact_data, $id_solicitante);

        $user = $this->helpers->getSession();

        $this->audit->create('Solicitante', 'Actualizacion de datos de contacto del solicitante ' . $email, $user->id, $this->helpers->getCurrentDateTime());

        $this->redirect('solicitante', 'Detail', 'success', "Los datos de contacto del solicitante han sido actualizado exitosamente", [ 'id' => $id_solicitante ]);
    }

    public function FormOcupacion()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('solicitante', 'index', 'danger', 'El solicitante ingresado no fue encontrado');
            return;
        }

        $id_solicitante = $_GET['id'];

        $solicitante_model = new Solicitante();
        $solicitante = $solicitante_model->getByOne('id_sol', $id_solicitante);

        $ocupaciones = [
            'Ninguno',
            'Trabajador',
            'Estudiante'
        ];

        foreach ($ocupaciones as $index => $ocupacion) {
            if ($ocupacion === $solicitante->ocup_sol) {
                unset($ocupaciones[$index]);
                array_unshift($ocupaciones, $ocupacion);
            }
        }

        $this->view('Solicitantes/FormOcupacion', [
            'title' => 'Editar Información de Ocupación',
            'solicitante' => $solicitante,
            'ocupaciones' => $ocupaciones
        ], true);
    }

    public function EditPersonalOcupacion()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_POST['id']) ) {
            $this->redirect('solicitante', 'index', 'danger', 'El solicitante ingresado no fue encontrado');
            return;
        }

        $id_solicitante = $_POST['id'];

        if (
            !isset($_POST['ocupacion']) &&
            !isset($_POST['nameOcupacion']) &&
            !isset($_POST['phoneOcupacion']) &&
            !isset($_POST['addressOcupacion'])
        ) {
            $this->redirect('solicitante', 'formocupacion', 'danger', 'Los campos enviados son requeridos', [ 'id' => $id_solicitante ]);
            return;
        }

        if (
            empty($_POST['ocupacion']) &&
            empty($_POST['nameOcupacion']) &&
            empty($_POST['phoneOcupacion']) &&
            empty($_POST['addressOcupacion'])
        ) {
            $this->redirect('solicitante', 'formocupacion', 'danger', 'Los campos enviados son requeridos', [ 'id' => $id_solicitante ]);
            return;
        }

        $solicitante_model = new Solicitante();
        $solicitante = $solicitante_model->getByOne('id_sol', $id_solicitante);

        if ( !$solicitante ) {
            $this->redirect('solicitante', 'index', 'danger', 'El solicitante ingresado no fue encontrado');
            return;
        }

        $ocupacion = $_POST['ocupacion'];
        $name_ocupacion = $_POST['nameOcupacion'];
        $phone_ocupacion = $_POST['phoneOcupacion'];
        $address_ocupacion = $_POST['addressOcupacion'];

        $new_personal_ocupacion_data = [
            'ocup_sol' => $ocupacion,
            'nom_inst' => $name_ocupacion,
            'tel_inst' => $phone_ocupacion,
            'dir_inst' => $address_ocupacion,
        ];

        $solicitante_model->updatePersonalOcupacionData($new_personal_ocupacion_data, $id_solicitante);

        $user = $this->helpers->getSession();

        $this->audit->create('Solicitante', 'Actualizacion de datos de ocupación del solicitante', $user->id, $this->helpers->getCurrentDateTime());

        $this->redirect('solicitante', 'Detail', 'success', "Los datos de ocupación del solicitante han sido actualizado exitosamente", [ 'id' => $id_solicitante ]);
    }

    public function GetCarnet()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('solicitante', 'index', 'danger', 'El solicitante ingresado no fue encontrado');
            return;
        }

        $id_solicitante = $_GET['id'];

        $solicitante_model = new Solicitante();
        $solicitante = $solicitante_model->getByOne('id_sol', $id_solicitante);

        $this->pdf->getCarnet([ 'solicitante' => $solicitante ]);
    }

    public function getHistorialPrestamo()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('solicitante', 'index', 'danger', 'El solicitante ingresado no fue encontrado');
            return;
        }

        $id_solicitante = $_GET['id'];

        $solicitante_model = new Solicitante();
        $solicitante = $solicitante_model->getByOne('id_sol', $id_solicitante);

        $user = $this->authentication->getSession();

        $prestamo_model = new Prestamo();
        $prestamos_by_solicitante = $prestamo_model->getBy('numero_carnet2', $solicitante->id_sol);

        $libro_model = new Libro();

        foreach ($prestamos_by_solicitante as $prestamo) {
            if ($libro = $libro_model->getByOne('id_libro', $prestamo->id_libro2)) {
                $prestamo->id_libro2 = $libro;
            }
        }

        $this->pdf->getHistorialPrestamo([ 'solicitante' => $solicitante, 'user' => $user, 'historial' => $prestamos_by_solicitante ]);
    }
}
