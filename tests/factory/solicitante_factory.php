<?php

use App\Models\Solicitante;
use Faker\Factory;

require_once __DIR__ . '/../../vendor/autoload.php';

$faker = Factory::create('es_ES');

$sexes = [
    'Masculino',
    'Femenino',
    'Otros'
];

function getNumberUnique() : int {
    $solicitante = new Solicitante();
    $number = count($solicitante->getAll()) + 1000;
    return $number;
}

$placeholder = [
    'id_sol' => fn() => null,
    'carnet' => fn() => getNumberUnique(),
    'nom_sol' => fn() => $faker->name(),
    'ape_sol' => fn() => $faker->lastName(),
    'ced_sol' => fn() => $faker->numberBetween(6000000, 40000000),
    'edad_sol' => fn() => $faker->numberBetween(1, 80),
    'tlf_sol' => fn() => $faker->phoneNumber(),
    'dir_sol' => fn() => $faker->address(),
    'corr_sol' => fn() => $faker->email(),
    'sex_sol' => fn() => $sexes[$faker->numberBetween(0, 2)],
    'ocup_sol' => fn() => 'Ninguno',
    'nom_inst' => fn() => null,
    'dir_inst' => fn() => null,
    'tel_inst' => fn() => null,
    'estado_s' => fn() => 1,
];
