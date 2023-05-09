<?php

namespace App\Core;

use App\Utils\Audit\Audit;
use App\Utils\Authentication\Authentication;
use App\Utils\Pdf\Pdf;
use ReflectionClass;

class FrontController
{
    const DEFAULT_CONTROLLER = 'home';
    const DEFAULT_ACTION = 'index';

    private static function controllerLoad($name_controller)
    {
        $name_controller = ucwords($name_controller) . 'Controller';
        $path_to_file_controller = dirname(__DIR__) . '/Controllers/' . $name_controller . '.php';

        if (!is_file($path_to_file_controller)) {
            $name_controller = 'Error' . 'Controller';
            $path_to_file_controller = dirname(__DIR__) . '/Controllers/' . $name_controller . '.php';
        }

        require_once $path_to_file_controller;

        $reflection_class = new ReflectionClass($name_controller);
        $reflection_methods = $reflection_class->getMethods();

        $reflection_method = array_filter($reflection_methods, function($reflection_method) {
            return $reflection_method->getName() === '__construct';
        });

        if (count($reflection_method) > 0) {
            $reflection_method = array_shift($reflection_method);
            $reflection_parameter = $reflection_method->getParameters();

            $services = self::getServices();
            $params = self::getParams($reflection_parameter, $services);

            $reflection_class = new ReflectionClass($name_controller);
            $controller = $reflection_class->newInstanceArgs($params);
        } else {
            $controller = new $name_controller;
        }

        return $controller;
    }

    private static function actionLoad($controller, $action)
    {
        $controller->$action();
    }

    public static function dispatcher()
    {
        $name_controller = $_GET['controller'] ?? self::DEFAULT_CONTROLLER;
        $action = $_GET['action'] ?? self::DEFAULT_ACTION;

        $controller = self::controllerLoad($name_controller);

        if (method_exists($controller, $action)) {
            self::actionLoad($controller, $action);
            return;
        }

        self::actionLoad($controller, self::DEFAULT_ACTION);
    }

    private static function getServices() {
        $authentication = new Authentication();
        $pdf = new Pdf();
        $audit = new Audit();

        return [$authentication, $pdf, $audit];
    }

    private static function getParams($reflection_parameter, $services)
    {
        $params = [];

        foreach ($services as $service) {
            $reflection_class = new ReflectionClass($service);

            $interfaces = $reflection_class->getInterfaceNames();

            $parameter_filter = [];

            foreach ($reflection_parameter as $parameter) {
                if ($parameter->getType()->__toString() === $interfaces[0]) {
                    $parameter_filter[] = $parameter;
                }
            }

            if (count($parameter_filter) > 0) {
                $parameter = array_shift($parameter_filter);

                $index_of = array_search($parameter->getType()->__toString(), $interfaces);

                if (!$index_of) {
                    $params[] = $service;
                }
            }
        }

        return $params;
    }
}
