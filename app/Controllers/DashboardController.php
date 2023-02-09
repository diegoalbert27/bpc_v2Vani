<?php

use App\Core\baseController;
use App\Utils\Authentication\InterfaceAuthentication;

class DashboardController extends baseController
{
    protected $authentication;
    public function __construct(InterfaceAuthentication $authentication)
    {
        $this->authentication = $authentication;
    }

    public function Index()
    {
        $this->authentication($this->authentication->isAuth());

        $this->view('Dashboard/Dashboard', [
            'title' => 'Dashboard'
        ], true);
    }
}
