<?php

namespace App\Models;

use App\Core\baseModel;

class Backup extends baseModel
{
    private $id;
    private $url;
    protected $table = 'backup';

    public function __construct(array $backup = null)
    {
        if (is_array($backup)) {
            $this->id = $backup['id'];
            $this->url = $backup['url'];
        }

        parent::__construct($this->table);
    }

    public function save()
    {
        $query = "INSERT INTO {$this->table} (url) VALUES (:url)";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':url', $this->url);

        return $stmt->execute();
    }

    public function update()
    {
        $query = "UPDATE {$this->table} SET url = :url WHERE id = :id";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':url', $this->url);

        return $stmt->execute();
    }
}
