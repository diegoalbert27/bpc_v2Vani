<?php

namespace App\Models;

use App\Core\baseModel;

class EventParticipant extends baseModel
{
    private $ID;
    private $id_user;
    private $id_event;
    protected $table = 'event_participant';

    public function __construct(?array $event_participant = null)
    {
        if (is_array($event_participant)) {
            $this->ID = $event_participant['ID'];
            $this->id_user = $event_participant['id_user'];
            $this->id_event = $event_participant['id_event'];
        }

        parent::__construct($this->table);
    }

    public function save()
    {
        $query = "INSERT INTO {$this->table} (id_user, id_event) VALUES (:id_user, :id_event)";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':id_user', $this->id_user);
        $stmt->bindParam(':id_event', $this->id_event);

        return $stmt->execute();
    }

    public function update()
    {
        $query = "UPDATE {$this->table} SET id_user = :id_user, id_event = :id_event WHERE ID = :ID";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':ID', $this->ID);
        $stmt->bindParam(':id_user', $this->id_user);
        $stmt->bindParam(':id_event', $this->id_event);

        return $stmt->execute();
    }
}
