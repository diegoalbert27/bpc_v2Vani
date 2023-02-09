<?php

namespace App\Core;

use App\Utils\DataBase;

class baseModel
{
    public $database;
    private $table;

    public function __construct($table)
    {
        $this->table = $table;
        $this->database = DataBase::getInstance();
    }

    public function getAll()
    {
        $rows = [];
        $query = "SELECT * FROM {$this->table}";

        $stmt = $this->database->query($query);

        while ($row = $stmt->fetch(\PDO::FETCH_OBJ)) {
            array_push($rows, $row);
        }

        return $rows;
    }

    public function getByOne($column, $value)
    {
        $query = "SELECT * FROM {$this->table} WHERE {$column} = :value";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':value', $value);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function getBy($column, $value)
    {
        $query = "SELECT * FROM {$this->table} WHERE {$column} = :value";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':value', $value);
        $stmt->execute();

        $rows = [];

        while ($row = $stmt->fetch(\PDO::FETCH_OBJ)) {
            array_push($rows, $row);
        }

        return $rows;
    }
    public function deleteBy($column, $value)
    {
        $query = "DELETE FROM {$this->table} WHERE {$column} = :value";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':value', $value);

        return $stmt->execute();
    }

    public function lastInsertId()
    {
        return $this->database->lastInsertId();
    }
}
