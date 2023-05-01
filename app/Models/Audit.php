<?php

namespace App\Models;

use App\Core\baseModel;

class Audit extends baseModel
{
    private $id_aud;
    private $ent_aud;
    private $acc_aud;
    private $usr_aud;
    private $fec_aud;
    protected $table = 'auditorias';

    public function __construct(array $audit = null)
    {
        if (is_array($audit)) {
            $this->id_aud = $audit['id_aud'];
            $this->ent_aud = $audit['ent_aud'];
            $this->acc_aud = $audit['acc_aud'];
            $this->usr_aud = $audit['usr_aud'];
            $this->fec_aud = $audit['fec_aud'];
        }

        parent::__construct($this->table);
    }

    public function save()
    {
        $query = "INSERT INTO {$this->table} (ent_aud, acc_aud, usr_aud, fec_aud) VALUES (:ent_aud, :acc_aud, :usr_aud, :fec_aud)";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':ent_aud', $this->ent_aud);
        $stmt->bindParam(':acc_aud', $this->acc_aud);
        $stmt->bindParam(':usr_aud', $this->usr_aud);
        $stmt->bindParam(':fec_aud', $this->fec_aud);

        return $stmt->execute();
    }

    public function update()
    {
        $query = "UPDATE {$this->table} SET ent_aud = :ent_aud, acc_aud = :acc_aud, usr_aud = :usr_aud, fec_aud = :fec_aud WHERE id_aud = :id_aud";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':id_aud', $this->id_aud);
        $stmt->bindParam(':ent_aud', $this->ent_aud);
        $stmt->bindParam(':acc_aud', $this->acc_aud);
        $stmt->bindParam(':usr_aud', $this->usr_aud);
        $stmt->bindParam(':fec_aud', $this->fec_aud);

        return $stmt->execute();
    }
}
