<?php

namespace App\Utils\Audit;

interface InterfaceAudit
{
    public function create($entitie, $action, $user, $datetime);
    public function get();
}
