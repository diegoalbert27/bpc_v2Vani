<?php

namespace App\Models;

use App\Core\baseModel;

class Event extends baseModel
{
    private $id_event;
    private $title_event;
    private $info_event;
    private $organizer_event;
    private $date_realized_event;
    private $time;
    private $date_created_event;
    private $place_event;
    private $type_event;
    private $participants_event;
    private $state_event;
    protected $table = 'events';

    public function __construct(?array $event = null)
    {
        if (is_array($event)) {
            $this->id_event = $event['id_event'];
            $this->title_event = $event['title_event'];
            $this->info_event = $event['info_event'];
            $this->organizer_event = $event['organizer_event'];
            $this->date_realized_event = $event['date_realized_event'];
            $this->time = $event['time'];
            $this->date_created_event = $event['date_created_event'];
            $this->place_event = $event['place_event'];
            $this->type_event = $event['type_event'];
            $this->participants_event = $event['participants_event'];
            $this->state_event = $event['state_event'];
        }

        parent::__construct($this->table);
    }

    public function save()
    {
        $query = "INSERT INTO {$this->table} (title_event, info_event, organizer_event, date_realized_event, time, date_created_event, place_event, type_event, participants_event, state_event) VALUES (:title_event, :info_event, :organizer_event, :date_realized_event, :time, :date_created_event, :place_event, :type_event, :participants_event, :state_event)";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':title_event', $this->title_event);
        $stmt->bindParam(':info_event', $this->info_event);
        $stmt->bindParam(':organizer_event', $this->organizer_event);
        $stmt->bindParam(':date_realized_event', $this->date_realized_event);
        $stmt->bindParam(':time', $this->time);
        $stmt->bindParam(':date_created_event', $this->date_created_event);
        $stmt->bindParam(':place_event', $this->place_event);
        $stmt->bindParam(':type_event', $this->type_event);
        $stmt->bindParam(':participants_event', $this->participants_event);
        $stmt->bindParam(':state_event', $this->state_event);

        return $stmt->execute();
    }

    public function update()
    {
        $query = "UPDATE {$this->table} SET title_event = :title_event, info_event = :info_event, organizer_event = :organizer_event, date_realized_event = :date_realized_event, time = :time,  date_created_event = :date_created_event, place_event = :place_event, type_event = :type_event, participants_event = :participants_event, state_event = :state_event WHERE id_event = :id_event";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':id_event', $this->id_event);
        $stmt->bindParam(':title_event', $this->title_event);
        $stmt->bindParam(':info_event', $this->info_event);
        $stmt->bindParam(':organizer_event', $this->organizer_event);
        $stmt->bindParam(':date_realized_event', $this->date_realized_event);
        $stmt->bindParam(':time', $this->time);
        $stmt->bindParam(':date_created_event', $this->date_created_event);
        $stmt->bindParam(':place_event', $this->place_event);
        $stmt->bindParam(':type_event', $this->type_event);
        $stmt->bindParam(':participants_event', $this->participants_event);
        $stmt->bindParam(':state_event', $this->state_event);

        return $stmt->execute();
    }

    public function editState($id_event, $state_event)
    {
        $query = "UPDATE {$this->table} SET state_event = :state_event WHERE id_event = :id_event";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':id_event', $id_event);
        $stmt->bindParam(':state_event', $state_event);

        return $stmt->execute();
    }
}
