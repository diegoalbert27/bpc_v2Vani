<?php

namespace App\Models;

use App\Core\baseModel;

class Category extends baseModel
{
    private $id;
    private $name;
    private $ubication;
    private $enabled;
    protected $table = 'categories';

    public function __construct(array $category = null)
    {
        if (is_array($category)) {
            $this->id = $category['id'];
            $this->name = $category['name'];
            $this->ubication = $category['ubication'];
            $this->enabled = $category['enabled'];
        }

        parent::__construct($this->table);
    }

    public function save()
    {
        $query = "INSERT INTO {$this->table} (name, ubication, enabled) VALUES (:name, :ubication, :enabled)";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':ubication', $this->ubication);
        $stmt->bindParam(':enabled', $this->enabled);

        return $stmt->execute();
    }

    public function update()
    {
        $query = "UPDATE {$this->table} SET name = :name, ubication = :ubication, enabled = :enabled  WHERE id = :id";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':ubication', $this->ubication);
        $stmt->bindParam(':enabled', $this->enabled);

        return $stmt->execute();
    }
}
