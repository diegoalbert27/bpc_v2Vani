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

    public function save()
    {
        $query = "INSERT INTO {$this->table} (cant_inv, total_inv, min_inv, resto_inv) VALUES (:cant_inv, :total_inv, :min_inv, :resto_inv)";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':cant_inv', $this->cant_inv);
        $stmt->bindParam(':total_inv', $this->total_inv);
        $stmt->bindParam(':min_inv', $this->min_inv);
        $stmt->bindParam(':resto_inv', $this->resto_inv);

        return $stmt->execute();
    }

    public function update()
    {
        $query = "UPDATE {$this->table} SET cant_inv = :cant_inv, total_inv = :total_inv, min_inv = :min_inv, resto_inv = :resto_inv WHERE id_inv = :id_inv";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':id_inv', $this->id_inv);
        $stmt->bindParam(':cant_inv', $this->cant_inv);
        $stmt->bindParam(':total_inv', $this->total_inv);
        $stmt->bindParam(':min_inv', $this->min_inv);
        $stmt->bindParam(':resto_inv', $this->resto_inv);

        return $stmt->execute();
    }
}
