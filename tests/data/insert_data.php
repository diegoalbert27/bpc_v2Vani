<?php

use App\Models\Solicitante;

require_once __DIR__ . '/../../vendor/autoload.php';

require_once '../factory/factory.php';
require_once '../factory/solicitante_factory.php';

$results = factory(Solicitante::class, $placeholder, 100);
echo json_encode($results);
