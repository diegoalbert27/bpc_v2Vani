<?php

error_reporting(E_ALL & ~E_NOTICE);

require_once  dirname(__DIR__) . '/vendor/autoload.php';

use App\Core\FrontController;

FrontController::dispatcher();
