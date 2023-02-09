<?php

namespace App\Utils\Authentication;

interface InterfaceAuthentication
{
    public function create($user);
    public function destroy();
    public function isAuth();
}
