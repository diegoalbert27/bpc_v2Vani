<?php

namespace App\Models;

use App\Core\baseModel;

class Libro extends baseModel
{
    private $id_libro;
    private $cota;
    private $titulo;
    private $autor;
    private $categoria;
    private $estado_libro;
    private $sinopsis;
    private $cantidad;
    protected $table = 'libros';

    public function __construct(?array $libro = null)
    {
        if (is_array($libro)) {
            $this->id_libro = $libro['id_libro'];
            $this->cota = $libro['cota'];
            $this->titulo = $libro['titulo'];
            $this->autor = $libro['autor'];
            $this->categoria = $libro['categoria'];
            $this->estado_libro = $libro['estado_libro'];
            $this->sinopsis = $libro['sinopsis'];
            $this->cantidad = $libro['cantidad'];
        }

        parent::__construct($this->table);
    }
}
