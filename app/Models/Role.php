<?php

namespace App\Models;

use App\Core\baseModel;

class Role extends baseModel
{
    private $id;
    private $name;
    private $nivel;
    protected $table = 'roles';

    public function __construct(?array $role = null)
    {
        if (is_array($role)) {
            $this->id = $role['id'];
            $this->name = $role['name'];
            $this->nivel = $role['nivel'];
        }

        parent::__construct($this->table);
    }
}
