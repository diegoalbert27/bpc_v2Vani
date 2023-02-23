<?php

namespace App\Models;

use App\Core\baseModel;

class Inventario extends baseModel
{
    private $id_inv;
    private $cant_inv;
    private $total_inv;
    private $min_inv;
    private $resto_inv;
    protected $table = 'inventario';

    public function __construct(?array $inventario = null)
    {
        if (is_array($inventario)) {
            $this->id_inv = $inventario['id_inv'];
            $this->cant_inv = $inventario['cant_inv'];
            $this->total_inv = $inventario['total_inv'];
            $this->min_inv = $inventario['min_inv'];
            $this->resto_inv = $inventario['resto_inv'];
        }

        parent::__construct($this->table);
    }
}
