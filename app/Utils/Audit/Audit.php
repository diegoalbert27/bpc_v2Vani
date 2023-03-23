<?php

namespace App\Utils\Audit;

use App\Utils\Audit\InterfaceAudit;

class Audit implements InterfaceAudit {
    public function create($entitie, $action, $user, $datetime) {
        $audit_model = new \App\Models\Audit([
            'id_aud' => null,
            'ent_aud' => $entitie,
            'acc_aud' => $action,
            'usr_aud' => $user,
            'fec_aud' => $datetime
        ]);

        return $audit_model->save();
    }

    public function get() {
        $audit_model = new \App\Models\Audit();
        return $audit_model->getAll();
    }
}
