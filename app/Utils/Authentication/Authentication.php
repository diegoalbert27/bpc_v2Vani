<?php

namespace App\Utils\Authentication;

use App\Utils\Authentication\InterfaceAuthentication;
use stdClass;

class Authentication implements InterfaceAuthentication
{
    public function create($user)
    {
        session_start();
        $_SESSION['user'] = $user;
    }

    public function destroy()
    {
        session_unset();
        session_destroy();
    }

    public function isAuth()
    {
        session_start();

        if (isset($_SESSION['user'])) {
            return true;
        }

        return false;
    }

    public function getSession()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        return new stdClass();
    }
}
