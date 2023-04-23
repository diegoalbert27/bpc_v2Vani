<?php

use App\Core\baseController;

class ErrorController extends baseController
{
    public function Index()
    {
        $this->view('Error/404', [ 'title' => 'Pagina No Encontrada' ]);
    }
}
