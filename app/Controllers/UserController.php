<?php

use App\Core\baseController;
use App\Models\Organizer;
use App\Models\Role;
use App\Models\User;
use App\Models\Question;

use App\Utils\Authentication\InterfaceAuthentication;

class UserController extends baseController
{
    protected $authentication;

    public function __construct(InterfaceAuthentication $authentication)
    {
        $this->authentication = $authentication;
    }

    public function Index()
    {
        $this->authentication($this->authentication->isAuth());

        $user_model = new User();
        $role_model = new Role();

        $users = $user_model->getAll();

        foreach ($users as $user) {
            $role_finded = $role_model->getBy('id', $user->role);
            $role = array_shift($role_finded);
            $user->role = $role;
        }

        $roles = $role_model->getAll();

        $this->view('Usuarios/Inicio', [
            'title' => 'Usuarios',
            'roles' => $roles,
            'users' => $users
        ], true);
    }

    public function Details()
    {
        $this->authentication($this->authentication->isAuth());

        if (!isset($_GET['id'])) {
            $this->redirect('user', 'index', 'danger', 'El usuario ingresado no fue encontrado');
            return;
        }

        $id_user = $_GET['id'];

        $user_model = new User();
        $users_finded = $user_model->getBy('id', $id_user);

        if (count($users_finded) <= 0) {
            $this->redirect('user', 'index', 'danger', 'El usuario ingresado no fue encontrado');
            return;
        }

        $user = array_shift($users_finded);

        $role_model = new Role();
        $roles_finded = $role_model->getBy('id', $user->role);
        $role = array_shift($roles_finded);

        $user->role = $role;

        $organizer = new Organizer();

        $is_organizer = $organizer->getByOne('id_user', $id_user);

        $this->view('Usuarios/Details', [
            'title' => "{$user->user}",
            'user' => $user,
            'is_organizer' => $is_organizer
        ], true);
    }

    public function Create()
    {
        $this->authentication($this->authentication->isAuth());

        if (
            !isset($_POST['name']) ||
            !isset($_POST['username']) ||
            !isset($_POST['password']) ||
            !isset($_POST['phone']) ||
            !isset($_POST['email']) ||
            !isset($_POST['role'])
        ) {
            $this->redirect('user', 'index', 'warning', 'Los datos requeridos no fueron enviados');
            return;
        }

        if (
            empty($_POST['name']) ||
            empty($_POST['username']) ||
            empty($_POST['password']) ||
            empty($_POST['phone']) ||
            empty($_POST['email']) ||
            empty($_POST['role'])
        ) {
            $this->redirect('user', 'index', 'warning', 'Debe llenar todo el formulario para el registro');
            return;
        }

        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $role = $_POST['role'];

        $enabled = 1;

        $user = [
            'id' => null,
            'user' => $name,
            'role' => $role,
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
            $this->redirect('user', 'index', 'danger', "El nombre de usuario '{$username}' no se encuentra disponible");
            return;
        }

        if (count($user_finded_by_phone) > 0) {
            $this->redirect('user', 'index', 'danger', "El numero de teléfono '{$phone}' no se encuentra disponible");
            return;
        }

        if (count($user_finded_by_email) > 0) {
            $this->redirect('user', 'index', 'danger', "La direccion de email '{$email}' no se encuentra disponible");
            return;
        }

        if (!$user_model->save()) {
            $this->redirect('user', 'index', 'danger', 'Ups! Algo salio mal');
            return;
        }

        $this->redirect('user', 'questionform', '', '', [ 'id' => $user_model->lastInsertId() ]);
    }

    public function EditForm()
    {
        $this->authentication($this->authentication->isAuth());

        if (!isset($_GET['id'])) {
            $this->redirect('user', 'index', 'danger', 'El usuario ingresado no fue encontrado');
            return;
        }

        $id_user = $_GET['id'];

        $user_model = new User();
        $users_finded = $user_model->getBy('id', $id_user);

        if (count($users_finded) <= 0) {
            $this->redirect('user', 'index', 'danger', 'El usuario ingresado no fue encontrado');
            return;
        }

        $user = array_shift($users_finded);

        $role_model = new Role();
        $roles = $role_model->getAll();

        $roles_filter = [];

        foreach ($roles as $role) {
            if ($role->id === $user->role) {
                array_unshift($roles_filter, $role);
            } else {
                array_push($roles_filter, $role);
            }
        }

        $this->view('Usuarios/EditForm', [
            'title' => 'Editar Usuario',
            'roles' => $roles_filter,
            'user' => $user
        ], true);
    }

    public function Edit()
    {
        $this->authentication($this->authentication->isAuth());

        if (
            !isset($_POST['id']) ||
            !isset($_POST['name']) ||
            !isset($_POST['username']) ||
            !isset($_POST['password']) ||
            !isset($_POST['phone']) ||
            !isset($_POST['email'])
        ) {
            $this->redirect('user', 'index', 'warning', 'Los datos requeridos no fueron enviados');
            return;
        }

        if (
            empty($_POST['id']) ||
            empty($_POST['name']) ||
            empty($_POST['username']) ||
            empty($_POST['phone'])
        ) {
            $this->redirect('user', 'index', 'warning', 'Debe llenar todo el formulario para el registro');
            return;
        }

        $user_model = new User();

        $id_user = $_POST['id'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $session_user = $this->authentication->getSession();

        $user_finded = $user_model->getByOne('id', $id_user);

        if ( !$user_finded ) {
            $this->redirect('user', 'details', 'danger', 'El usuario ingresado no fue encontrado', [ 'id' => $id_user ]);
            return;
        }

        $role = $user_finded->role;
        $enabled = $user_finded->enabled;

        if ((int) $session_user->role->nivel === 10) {
            $role = $_POST['role'];
            $enabled = $_POST['enabled'];
        }

        $user = [
            'id' => $id_user,
            'user' => $name,
            'role' => $role,
            'username' => $username,
            'password' => $password == '' ? $user_finded->password : password_hash($password, PASSWORD_BCRYPT),
            'phone' => $phone,
            'email' => $email,
            'enabled' => $enabled
        ];

        $user_model = new User($user);

        $user_model->update();

        $this->redirect('user', 'details', 'success', "El usuario ha sido actualizado exitosamente", [ 'id' => $id_user ]);
    }

    public function QuestionForm()
    {
        $this->authentication($this->authentication->isAuth());

        if (!isset($_GET['id'])) {
            $this->redirect('dashboard', 'index', 'danger', 'El usuario ingresado no fue encontrado');
            return;
        }

        $id_user = $_GET['id'];

        $user_model = new User();
        $users_finded = $user_model->getBy('id', $id_user);

        if (count($users_finded) <= 0) {
            $this->redirect('user', 'index', 'danger', 'El usuario ingresado no fue encontrado');
            return;
        }

        $this->view('Usuarios/QuestionForm', [
            'title' => 'Pregunta de Seguridad',
            'id_user' => $id_user
        ], true);
    }

    public function CreateQuestion()
    {
        $this->authentication($this->authentication->isAuth());

        if (!isset($_POST['id'])) {
            $this->redirect('dashboard', 'index', 'danger', 'El usuario ingresado no fue encontrado');
            return;
        }

        $id_user = $_POST['id'];

        $user_model = new User();
        $users_finded = $user_model->getBy('id', $id_user);

        if (count($users_finded) <= 0) {
            $this->redirect('dashboard', 'index', 'danger', 'El usuario ingresado no fue encontrado');
            return;
        }

        $question_model = new Question();

        $questions_finded = $question_model->getBy('user', $id_user);

        if (count($questions_finded) > 0) {
            $this->redirect('user', 'details', 'danger', 'El usuario ya se encuentra con preguntas de seguridad registradas', [ 'id' => $id_user ]);
            return;
        }

        $field_for_question = [1, 2, 3];

        foreach ($field_for_question as $field) {
            if (
                !isset($_POST['answer_' . $field]) ||
                !isset($_POST['question_' . $field])
            ) {
                $this->redirect('user', 'details', 'warning', 'Los datos requeridos no fueron enviados', [ 'id' => $id_user ]);
                return;
            }

            if (
                empty($_POST['answer_' . $field]) ||
                empty($_POST['question_' . $field])
            ) {
                $this->redirect('user', 'details', 'warning', 'Los datos son requeridos', [ 'id' => $id_user ]);
                return;
            }

            $answer = $_POST['answer_' . $field];
            $question = $_POST['question_' . $field];

            $question_model = new Question([
                'id' => null,
                'answer' => base64_encode($answer),
                'question' => $question,
                'user' => $id_user
            ]);

            if (!$question_model->save()) {
                $question_model->deleteBy('user', $id_user);
                $this->redirect('user', 'details', 'danger', 'Ups! Algo salio mal', [ 'id' => $id_user ]);
            }
        }

        $this->redirect('user', 'details', 'success', "Las preguntas de seguridad han sido registradas exitosamente", [ 'id' => $id_user ]);
    }

    public function EditQuestionForm()
    {
        $this->authentication($this->authentication->isAuth());

        if (!isset($_GET['id'])) {
            $this->redirect('dashboard', 'index', 'danger', 'El usuario ingresado no fue encontrado');
            return;
        }

        $id_user = $_GET['id'];

        $user_model = new User();
        $users_finded = $user_model->getBy('id', $id_user);

        if (count($users_finded) <= 0) {
            $this->redirect('dashboard', 'index', 'danger', 'El usuario ingresado no fue encontrado');
            return;
        }

        $question_model =  new Question();
        $questions = $question_model->getBy('user', $id_user);

        if (count($questions) === 0) {
            $this->redirect('user', 'QuestionForm', 'info', 'Asignar Preguntas De Seguridad Para Este Usuario', [ 'id' => $id_user ]);
            return;
        }

        $this->view('Usuarios/EditQuestionForm', [
            'title' => 'Editar Usuario',
            'questions' => $questions,
            'id_user' => $id_user
        ], true);
    }

    public function EditQuestion()
    {
        $this->authentication($this->authentication->isAuth());

        if (!isset($_POST['id'])) {
            $this->redirect('dashboard', 'index', 'danger', 'El usuario ingresado no fue encontrado');
            return;
        }

        $id_user = $_POST['id'];

        $user_model = new User();
        $user_finded = $user_model->getByOne('id', $id_user);

        if ( !$user_finded ) {
            $this->redirect('user', 'details', 'danger', 'El usuario ingresado no fue encontrado', [ 'id' => $id_user ]);
            return;
        }

        $question_model = new Question();

        $questions_finded = $question_model->getBy('user', $id_user);

        if (count($questions_finded) <= 0) {
            $this->redirect('user', 'details', 'danger', 'El usuario no tiene preguntas de seguridad asignadas', [ 'id' => $id_user ]);
            return;
        }

        $field_for_question = [1, 2, 3];

        foreach ($field_for_question as $field) {
            if (
                !isset($_POST['id_question_' . $field]) ||
                !isset($_POST['answer_' . $field]) ||
                !isset($_POST['question_' . $field])
            ) {
                $this->redirect('user', 'details', 'warning', 'Los datos requeridos no fueron enviados', [ 'id' => $id_user ]);
                return;
            }

            if (
                empty($_POST['id_question_' . $field]) ||
                empty($_POST['answer_' . $field]) ||
                empty($_POST['question_' . $field])
            ) {
                $this->redirect('user', 'details', 'warning', 'Los datos son requeridos', [ 'id' => $id_user ]);
                return;
            }

            $id_question = $_POST['id_question_' . $field];
            $answer = $_POST['answer_' . $field];
            $question = $_POST['question_' . $field];

            $question_model = new Question([
                'id' => $id_question,
                'answer' => base64_encode($answer),
                'question' => $question,
                'user' => $id_user
            ]);

            $question_model->update();
        }

        $this->redirect('user', 'details', 'success', "Las preguntas de seguridad han sido actualizadas exitosamente", [ 'id' => $id_user ]);
    }

    public function TobeOrganizer()
    {
        $this->authentication($this->authentication->isAuth());

        if (!isset($_GET['id'])) {
            $this->redirect('user', 'index', 'danger', 'El usuario ingresado no fue encontrado');
            return;
        }

        $id_user = $_GET['id'];

        $organizer_model = new Organizer([
            'id_user' => $id_user,
            'is_actived' => 0
        ]);

        if ( !$organizer_model->save() ) {
            $this->redirect('user', 'details', 'danger', 'Ups! Algo salio mal', [ 'id' => $id_user ]);
        }

        $this->redirect('user', 'details', 'success', "Se registro como organizador exitosamente", [ 'id' => $id_user ]);
    }
}
