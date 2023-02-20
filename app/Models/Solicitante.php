<?php

namespace App\Models;

use App\Core\baseModel;

class Solicitante extends baseModel
{
    private $id_sol;
    private $carnet;
    private $nom_sol;
    private $ape_sol;
    private $ced_sol;
    private $edad_sol;
    private $tlf_sol;
    private $dir_sol;
    private $corr_sol;
    private $sex_sol;
    private $ocup_sol;
    private $nom_inst;
    private $dir_inst;
    private $tel_inst;
    private $estado_s;
    protected $table = 'solicitantes';

    public function __construct(?array $solicitante = null)
    {
        if (is_array($solicitante)) {
            $this->id_sol = $solicitante['id_sol'];
            $this->carnet = $solicitante['carnet'];
            $this->nom_sol = $solicitante['nom_sol'];
            $this->ape_sol = $solicitante['ape_sol'];
            $this->ced_sol = $solicitante['ced_sol'];
            $this->edad_sol = $solicitante['edad_sol'];
            $this->tlf_sol = $solicitante['tlf_sol'];
            $this->dir_sol = $solicitante['dir_sol'];
            $this->corr_sol = $solicitante['corr_sol'];
            $this->sex_sol = $solicitante['sex_sol'];
            $this->ocup_sol = $solicitante['ocup_sol'];
            $this->nom_inst = $solicitante['nom_inst'];
            $this->dir_inst = $solicitante['dir_inst'];
            $this->tel_inst = $solicitante['tel_inst'];
            $this->estado_s = $solicitante['estado_s'];
        }

        parent::__construct($this->table);
    }

    public function save()
    {
        $query = "INSERT INTO {$this->table} (carnet, nom_sol, ape_sol, ced_sol, edad_sol, tlf_sol, dir_sol, corr_sol, sex_sol, ocup_sol, nom_inst, dir_inst, tel_inst, estado_s) VALUES (:carnet, :nom_sol, :ape_sol, :ced_sol, :edad_sol, :tlf_sol, :dir_sol, :corr_sol, :sex_sol, :ocup_sol, :nom_inst, :dir_inst, :tel_inst, :estado_s)";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':carnet', $this->carnet);
        $stmt->bindParam(':nom_sol', $this->nom_sol);
        $stmt->bindParam(':ape_sol', $this->ape_sol);
        $stmt->bindParam(':ced_sol', $this->ced_sol);
        $stmt->bindParam(':edad_sol', $this->edad_sol);
        $stmt->bindParam(':tlf_sol', $this->tlf_sol);
        $stmt->bindParam(':dir_sol', $this->dir_sol);
        $stmt->bindParam(':corr_sol', $this->corr_sol);
        $stmt->bindParam(':sex_sol', $this->sex_sol);
        $stmt->bindParam(':ocup_sol', $this->ocup_sol);
        $stmt->bindParam(':nom_inst', $this->nom_inst);
        $stmt->bindParam(':dir_inst', $this->dir_inst);
        $stmt->bindParam(':tel_inst', $this->tel_inst);
        $stmt->bindParam(':estado_s', $this->estado_s);

        return $stmt->execute();
    }

    public function update()
    {
        $query = "UPDATE {$this->table} SET carnet = :carnet, nom_sol = :nom_sol, ape_sol = :ape_sol, ced_sol = :ced_sol, edad_sol = :edad_sol, tlf_sol = :tlf_sol, dir_sol = :dir_sol, corr_sol = :corr_sol, sex_sol = :sex_sol, ocup_sol = :ocup_sol, nom_inst = :nom_inst, dir_inst = :dir_inst, tel_inst = :tel_inst, estado_s = :estado_s WHERE id_sol = :id";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':carnet', $this->carnet);
        $stmt->bindParam(':nom_sol', $this->nom_sol);
        $stmt->bindParam(':ape_sol', $this->ape_sol);
        $stmt->bindParam(':ced_sol', $this->ced_sol);
        $stmt->bindParam(':edad_sol', $this->edad_sol);
        $stmt->bindParam(':tlf_sol', $this->tlf_sol);
        $stmt->bindParam(':dir_sol', $this->dir_sol);
        $stmt->bindParam(':corr_sol', $this->corr_sol);
        $stmt->bindParam(':sex_sol', $this->sex_sol);
        $stmt->bindParam(':ocup_sol', $this->ocup_sol);
        $stmt->bindParam(':nom_inst', $this->nom_inst);
        $stmt->bindParam(':dir_inst', $this->dir_inst);
        $stmt->bindParam(':tel_inst', $this->tel_inst);
        $stmt->bindParam(':estado_s', $this->estado_s);
        $stmt->bindParam(':id', $this->id_sol);

        return $stmt->execute();
    }

    public function updatePersonalData(array $new_personal_data, string $id_solicitante)
    {
        $query = "UPDATE {$this->table} SET nom_sol = :nom_sol, ape_sol = :ape_sol, ced_sol = :ced_sol, edad_sol = :edad_sol, sex_sol = :sex_sol WHERE id_sol = :id";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':nom_sol', $new_personal_data['nom_sol']);
        $stmt->bindParam(':ape_sol', $new_personal_data['ape_sol']);
        $stmt->bindParam(':ced_sol', $new_personal_data['ced_sol']);
        $stmt->bindParam(':edad_sol', $new_personal_data['edad_sol']);
        $stmt->bindParam(':sex_sol', $new_personal_data['sex_sol']);
        $stmt->bindParam(':id', $id_solicitante);

        return $stmt->execute();
    }

    public function updatePersonalContactData(array $new_personal_contact_data, string $id_solicitante)
    {
        $query = "UPDATE {$this->table} SET tlf_sol = :tlf_sol, corr_sol = :corr_sol, dir_sol = :dir_sol WHERE id_sol = :id";

        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':corr_sol', $new_personal_contact_data['corr_sol']);
        $stmt->bindParam(':tlf_sol', $new_personal_contact_data['tlf_sol']);
        $stmt->bindParam(':dir_sol', $new_personal_contact_data['dir_sol']);
        $stmt->bindParam(':id', $id_solicitante);

        return $stmt->execute();
    }

    public function updatePersonalOcupacionData(array $new_personal_ocupacion_data, string $id_solicitante)
    {
        $query = "UPDATE {$this->table} SET ocup_sol = :ocup_sol, nom_inst = :nom_inst, dir_inst = :dir_inst, tel_inst = :tel_inst WHERE id_sol = :id";

        $stmt = $this->database->prepare($query);

        $stmt->bindParam(':ocup_sol', $new_personal_ocupacion_data['ocup_sol']);
        $stmt->bindParam(':nom_inst', $new_personal_ocupacion_data['nom_inst']);
        $stmt->bindParam(':dir_inst', $new_personal_ocupacion_data['dir_inst']);
        $stmt->bindParam(':tel_inst', $new_personal_ocupacion_data['tel_inst']);
        $stmt->bindParam(':id', $id_solicitante);

        return $stmt->execute();
    }
}
