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

    public function save()
    {
        $query = "INSERT INTO {$this->table} (cota, titulo, autor, categoria, estado_libro, sinopsis, cantidad) VALUES (:cota, :titulo, :autor, :categoria, :estado_libro, :sinopsis, :cantidad)";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':cota', $this->cota);
        $stmt->bindParam(':titulo', $this->titulo);
        $stmt->bindParam(':autor', $this->autor);
        $stmt->bindParam(':categoria', $this->categoria);
        $stmt->bindParam(':estado_libro', $this->estado_libro);
        $stmt->bindParam(':sinopsis', $this->sinopsis);
        $stmt->bindParam(':cantidad', $this->cantidad);

        return $stmt->execute();
    }

    public function update()
    {
        $query = "UPDATE {$this->table} SET cota = :cota, titulo = :titulo, autor = :autor, categoria = :categoria, estado_libro = :estado_libro, sinopsis = :sinopsis, cantidad = :cantidad  WHERE id_libro = :id_libro";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':id_libro', $this->id_libro);
        $stmt->bindParam(':cota', $this->cota);
        $stmt->bindParam(':titulo', $this->titulo);
        $stmt->bindParam(':autor', $this->autor);
        $stmt->bindParam(':categoria', $this->categoria);
        $stmt->bindParam(':estado_libro', $this->estado_libro);
        $stmt->bindParam(':sinopsis', $this->sinopsis);
        $stmt->bindParam(':cantidad', $this->cantidad);

        return $stmt->execute();
    }
}
