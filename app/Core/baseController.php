<?php

namespace App\Core;

use App\Core\helpers;

class baseController
{
    public function view($view, $data = [], $layout = false)
    {
        extract($data);
        $helpers = new helpers();

        if ($layout) {
            include_once '../app/Views/index.php';
            return;
        }

        include_once '../app/Views/' . $view . '.php';
    }

    public function redirect($controller, $action = '', $type = '', $notification = '', $data_for_get = [])
    {
        $option_request = '';

        $data_url = [];

        if ($action !== '') {
            $option_request .= "&action={$action}";
        }

        if ($type !== '') {
            $option_request .= "&type={$type}";
        }

        if ($notification !== '') {
            $option_request .= "&notification={$notification}";
        }

        foreach ($data_for_get as $key => $value) {
            $data_url[] = "{$key}={$value}";
        }

        $data_url = implode('&', $data_url);

        if ($data_url !== '')
            $data_url = "&{$data_url}";

        header("Location: index.php?controller={$controller}{$option_request}{$data_url}");
    }

    public function authentication($is_auth)
    {
        if (!$is_auth) {
            $this->redirect('auth', 'login');
        }
    }

    public function json($response)
    {
        echo json_encode($response);
    }
}
