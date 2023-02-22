<?php

namespace App\Models;

use App\Core\baseModel;

class Prestamo extends baseModel
{
    private $id_p;
    private $numero_carnet2;
    private $id_libro2;
    private $fecha_entrega;
    private $fecha_devolucion;
    private $observaciones_p;
    private $pendiente;
    protected $table = 'prestamo';

    public function __construct(?array $prestamo = null)
    {
        if (is_array($prestamo)) {
            $this->id_p = $prestamo['id_p'];
            $this->numero_carnet2 = $prestamo['numero_carnet2'];
            $this->id_libro2 = $prestamo['id_libro2'];
            $this->fecha_entrega = $prestamo['fecha_entrega'];
            $this->fecha_devolucion = $prestamo['fecha_devolucion'];
            $this->observaciones_p = $prestamo['observaciones_p'];
            $this->pendiente = $prestamo['pendiente'];
        }

        parent::__construct($this->table);
    }
}
