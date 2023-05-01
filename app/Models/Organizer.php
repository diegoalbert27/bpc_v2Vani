<?php

namespace App\Models;

use App\Core\baseModel;

class Organizer extends baseModel
{
    private $id;
    private $id_user;
    private $is_actived;
    protected $table = 'organizer';

    public function __construct(array $organizer = null)
    {
        if (is_array($organizer)) {
            $this->id = $organizer['id'];
            $this->id_user = $organizer['id_user'];
            $this->is_actived = $organizer['is_actived'];
        }

        parent::__construct($this->table);
    }

    public function save()
    {
        $query = "INSERT INTO {$this->table} (id_user, is_actived) VALUES (:id_user, :is_actived)";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':id_user', $this->id_user);
        $stmt->bindParam(':is_actived', $this->is_actived);

        return $stmt->execute();
    }

    public function update()
    {
        $query = "UPDATE {$this->table} SET id_user = :id_user, is_actived = :is_actived WHERE id = :id";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':id_user', $this->id_user);
        $stmt->bindParam(':is_actived', $this->is_actived);

        return $stmt->execute();
    }

    public function updateStatus()
    {
        $query = "UPDATE {$this->table} SET is_actived = :is_actived WHERE id = :id";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':is_actived', $this->is_actived);

        return $stmt->execute();
    }
}
