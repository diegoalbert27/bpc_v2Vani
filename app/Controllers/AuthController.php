<?php

use App\Core\baseController;
use App\Models\Question;
use App\Models\Role;
use App\Models\User;
use App\Utils\Authentication\InterfaceAuthentication;

class AuthController extends baseController
{
    protected $authentication;
    public function __construct(InterfaceAuthentication $authentication)
    {
        $this->authentication = $authentication;
    }

    public function Index()
    {
        $this->authentication($this->authentication->isAuth());
    }

    public function Login()
    {
        if ($this->authentication->isAuth()) {
            $this->redirect('dashboard');
            return;
        }

        $this->view('Auth/Login', [
            'title' => 'Iniciar sesión'
        ]);
    }

    public function Validate()
    {
        if (!isset($_POST['username']) || !isset($_POST['password'])) {
            $this->redirect('auth', 'login', 'warning', 'Nombre de usuario o contraseña no fueron enviados');
            return;
        }

        $email = $_POST['username'];
        $password = $_POST['password'];

        $user_model = new User();
        $users_finded = $user_model->getBy('username', $email);

        $error_message = 'Usuario o contreseña son incorrectos';

        if (count($users_finded) <= 0) {
            $this->redirect('auth', 'login', 'danger', $error_message);
            return;
        }

        $user = array_shift($users_finded);

        if ((int) $user->enabled === 0) {
            $this->redirect('auth', 'login', 'danger', 'Este usuario ha sido bloqueado por seguridad');
            return;
        }

        if (!password_verify($password, $user->password)) {
            session_start();

            if (!isset($_SESSION['intents'])) {
                $_SESSION['intents'] = 3;
                $error_message .= "<br> <b>Le quedan {$_SESSION['intents']} intentos</b>";
                $this->redirect('auth', 'login', 'danger', $error_message);
                return;
            }

            $intents = $_SESSION['intents'] - 1;
            $_SESSION['intents'] = $intents;
            $error_message .= "<br> <b>Le quedan {$intents} intentos</b>";

            if ($intents <= 0) {
                session_unset();
                session_destroy();

                $user->enabled = 0;
                $user_model = new User((array) $user);
                $user_model->update();

                $this->redirect('auth', 'login', 'warning', "Atencion. El numero de intentos se agotaron, su cuenta ha sido bloqueada por seguridad.");
                return;
            }

            $this->redirect('auth', 'login', 'danger', $error_message);
            return;
        }

        $role_model = new Role();
        $role_finded = $role_model->getBy('id', $user->role);
        $role = array_shift($role_finded);
        $user->role = $role;

        $this->authentication->create($user);
        $this->redirect('dashboard');
    }

    public function Create()
    {
        if (
            !isset($_POST['name']) ||
            !isset($_POST['username']) ||
            !isset($_POST['password']) ||
            !isset($_POST['phone']) ||
            !isset($_POST['email'])
        ) {
            $this->redirect('auth', 'signup', 'warning', 'Los datos requeridos no fueron enviados');
            return;
        }

        if (
            empty($_POST['name']) ||
            empty($_POST['username']) ||
            empty($_POST['password']) ||
            empty($_POST['phone']) ||
            empty($_POST['email'])
        ) {
            $this->redirect('auth', 'signup', 'warning', 'Debe llenar todo el formulario para el registro');
            return;
        }

        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $role_model = new Role();
        $roles_finded = $role_model->getBy('nivel', 1);

        $role = array_shift($roles_finded);
        $enabled = 1;

        $user = [
            'id' => null,
            'user' => $name,
            'role' => $role->nivel,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'phone' => $phone,
            'email' => $email,
            'enabled' => $enabled
        ];

        $user_model = new User($user);

        $user_finded_by_username = $user_model->getBy('username', $username);
        $user_finded_by_phone = $user_model->getBy('phone', $phone);
        $user_finded_by_email = $user_model->getBy('email', $email);

        if (count($user_finded_by_username) > 0) {
            $this->redirect('auth', 'signup', 'danger', "El nombre de usuario '{$username}' no se encuentra disponible");
            return;
        }

        if (count($user_finded_by_phone) > 0) {
            $this->redirect('auth', 'signup', 'danger', "El numero de telefono '{$phone}' no se encuentra disponible");
            return;
        }

        if (count($user_finded_by_email) > 0) {
            $this->redirect('auth', 'signup', 'danger', "La direccion de email '{$email}' no se encuentra disponible");
            return;
        }

        if (!$user_model->save()) {
            $this->redirect('auth', 'signup', 'danger', 'Ups! Algo salio mal');
            return;
        }

        $user['id'] = $user_model->lastInsertId();
        $user['role'] = $role;

        $this->authentication->create($user);
        $this->redirect('dashboard');
    }

    public function Signup()
    {
        $this->view('Auth/Signup', [
            'title' => 'Registrarse'
        ]);
    }

    public function Logout()
    {
        $this->authentication($this->authentication->isAuth());
        $this->authentication->destroy();
        $this->authentication($this->authentication->isAuth());
    }

    public function AccountRecovery()
    {
        $this->view('Auth/AccountRecovery', [
            'title' => 'Recuperar cuenta'
        ]);
    }

    public function RecoveryForm()
    {
        if (
            !isset($_POST['user'])
        ) {
            $this->redirect('auth', 'accountrecovery', 'warning', 'Los datos requeridos no fueron enviados');
            return;
        }

        if (
            empty($_POST['user'])
        ) {
            $this->redirect('auth', 'accountrecovery', 'warning', 'Debe llenar todo el formulario para el registro');
            return;
        }

        $user_name = $_POST['user'];
        $user_model = new User();

        $users = $user_model->getAll();

        foreach($users as $user) {
            if ($user->user === $user_name || $user->username === $user_name || $user->email === $user_name) {

                if ((int) $user->enabled === 0) {
                    $this->redirect('auth', 'login', 'danger', 'Este usuario ha sido bloqueado por seguridad');
                    return;
                }

                $question_model = new Question();
                $questions = $question_model->getBy('user', $user->id);

                if (count($questions) <= 0) {
                    $this->redirect('auth', 'accountrecovery', 'danger', 'El usuario no fue encontrado');
                    return;
                }

                $random_question_1 = rand(0, 2);
                $random_question_2 = rand(0, 2);

                while ($random_question_1 === $random_question_2) $random_question_2 = rand(0, 2);

                $this->view('Auth/RecoveryQuestion', [
                    'title' => 'Preguntas de Seguridad',
                    'questions' => [$questions[$random_question_1], $questions[$random_question_2]]
                ]);

                return;
            }
        }

        $this->redirect('auth', 'accountrecovery', 'danger', 'El usuario no fue encontrado');
    }

    public function Recovery()
    {
        if (
            !isset($_POST['user']) ||
            !isset($_POST['id_1']) ||
            !isset($_POST['answer_1']) ||
            !isset($_POST['id_2']) ||
            !isset($_POST['answer_2'])
        ) {
            $this->redirect('auth', 'login', 'accountrecovery', 'Los datos requeridos no fueron enviados');
            return;
        }

        if (
            empty($_POST['user']) ||
            empty($_POST['id_1']) ||
            empty($_POST['answer_1']) ||
            empty($_POST['id_2']) ||
            empty($_POST['answer_2'])
        ) {
            $this->redirect('auth', 'login', 'accountrecovery', 'Debe llenar todo el formulario para el registro');
            return;
        }

        $id_user = $_POST['user'];

        $id_question_1 = (int) $_POST['id_1'];
        $answer_1 = $_POST['answer_1'];

        $id_question_2 = (int) $_POST['id_2'];
        $answer_2 = $_POST['answer_2'];

        $question_model = new Question();

        $questions = $question_model->getBy('user', $id_user);

        if ($questions <= 0) {
            $this->redirect('auth', 'accountrecovery', 'danger', 'El usuario no fue encontrado');
            return;
        }

        $question_finded_1 = null;
        $question_finded_2 = null;

        foreach ($questions as $question) {
            if ($question->id === $id_question_1) {
                $question_finded_1 = $question;
            }

            if ($question->id === $id_question_2) {
                $question_finded_2 = $question;
            }
        }

        $user_model = new User();
        $users_finded = $user_model->getBy('id', $id_user);

        $user = array_shift($users_finded);

        if (is_null($question_finded_1) || is_null($question_finded_2)) {
            $this->redirect('auth', 'accountrecovery', 'danger', 'Las respuestas son incorrectas');
            return;
        }

        if (($question_finded_1->answer !== $answer_1) || ($question_finded_2->answer !== $answer_2)) {
            $error_message = 'Las respuestas son incorrectas';

            session_start();

            if (!isset($_SESSION['intents'])) {
                $_SESSION['intents'] = 3;
                $error_message .= "<br> <b>Le quedan {$_SESSION['intents']} intentos</b>";
                $this->redirect('auth', 'accountrecovery', 'danger', $error_message);
                return;
            }

            $intents = $_SESSION['intents'] - 1;
            $_SESSION['intents'] = $intents;
            $error_message .= "<br> <b>Le quedan {$intents} intentos</b>";

            if ($intents <= 0) {
                session_unset();
                session_destroy();

                $user->enabled = 0;
                $user_model = new User((array) $user);
                $user_model->update();

                $this->redirect('auth', 'accountrecovery', 'warning', "Atencion. El numero de intentos se agotaron, su cuenta ha sido bloqueada por seguridad.");
                return;
            }

            $this->redirect('auth', 'accountrecovery', 'danger', $error_message);
            return;
        }

        $role_model = new Role();
        $role_finded = $role_model->getBy('id', $user->role);
        $role = array_shift($role_finded);
        $user->role = $role;

        $this->authentication->create($user);
        $this->redirect('dashboard');
    }
}
