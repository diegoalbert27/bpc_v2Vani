<?php

use Faker\Factory;

require_once __DIR__ . '/../../vendor/autoload.php';

$faker = Factory::create('es_ES');

function factory($model, array $placeholder, int $count) : array {
    try {
        $data_registered = [];

        for ($index = 1; $index <= $count; $index++) {
            $values = array_map(fn($value) => $value(), $placeholder);
            $object = new $model($values);

            if ($object->save()) {
                $data_registered[] = $values;
            }
        }

        return $data_registered;
    } catch(Exception $err) {
        throw $err;
    }
}
