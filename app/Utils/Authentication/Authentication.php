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

        $request_origin_ip = getenv("REMOTE_ADDR");

        if (isset($_SESSION['user']) && ($_SESSION['user']->origin_ip === $request_origin_ip)) {
            return true;
        }

        return false;
    }

    public function getSession()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        return null;
    }
}
