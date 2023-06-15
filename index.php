<?php

ini_set("display_errors", "1");
error_reporting(E_ALL & ~E_NOTICE);

require_once dirname(__FILE__) . '/vendor/autoload.php';

use App\Core\FrontController;

FrontController::dispatcher();
