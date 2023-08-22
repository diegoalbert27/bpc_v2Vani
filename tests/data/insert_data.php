<?php

use App\Models\Solicitante;
use Faker\Factory;

require_once __DIR__ . '/../../vendor/autoload.php';

$faker = Factory::create('es_ES');

function factory($model, array $placeholder, int $count) : array {
    $data_registered = [];

    for ($index = 1; $index <= $count; $index++) {
        $values = array_map(fn($value) => $value(), $placeholder);
        $object = new $model($values);

        if ($object->save()) {
            $data_registered[] = $placeholder;
        }

        $data_registered[] = $values;
    }

    return $data_registered;
}

$sexes = [
    'Masculino',
    'Femenino',
    'Otros'
];

$numbers_unique = [];

function getNumberUnique() : int {
    global $faker;
    global $numbers_unique;

    $number = null;

    do {
        $number = $faker->randomNumber(4, true);
    } while(array_search($number, $numbers_unique));

    array_push($numbers_unique, $number);

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

$results = factory(Solicitante::class, $placeholder, 100);
echo json_encode($results);
