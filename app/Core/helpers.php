<?php

namespace App\Core;

class helpers {
    public function generateUrl($controller, $action = '', $data_for_get = [])
    {
        $data_url = [];

        if ($action !== '') {
            $action = "&action={$action}";
        }

        foreach ($data_for_get as $key => $value) {
            $data_url[] = "{$key}={$value}";
        }

        $data_url = implode('&', $data_url);

        if ($data_url !== '')
            $data_url = "&{$data_url}";

        return "?controller={$controller}{$action}{$data_url}";
    }

    public function getMessage(array $message)
    {
        $icon = isset($message['icon']) ? "<span class=\"fas fa-{$message['icon']}\"></span>" : "";

        if (isset($message['type']) && isset($message['notification'])) {
            return "
                <div class=\"alert alert-{$message['type']} alert-dismissible fade show\" role=\"alert\">
                    ${icon} {$message['notification']}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }

        return "";
    }

    public function isEnabled($is_enabled)
    {
        if ($is_enabled) {
            return '<span class="fas fa-circle text-success"></span> Activo';
        }

        return '<span class="fas fa-circle text-danger"></span> Desactivo';
    }

    public function isEnabledOption($is_enabled) {
        if ($is_enabled) {
            return '
                <option value="1">Activo</option>
                <option value="0">Desactivo</option>
            ';
        }

        return '
            <option value="0">Desactivo</option>
            <option value="1">Activo</option>
        ';
    }

    public function getHeader($title, $breadcrumb)
    {
        $paths = '';

        $breadcrumb = explode('/', $breadcrumb);

        foreach ($breadcrumb as $path) {
            $paths .= "<li class=\"breadcrumb-item\">{$path}</li>";
        }

        return "
            <div class=\"d-flex justify-content-between\">
                <h2 class=\"fw-normal\">
                    {$title}
                </h2>
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                        {$paths}
                    </ol>
                </nav>
            </div>
        ";
    }
}
