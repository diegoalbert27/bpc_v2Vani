<?php

use App\Core\baseController;
use App\Models\User;
use App\Utils\Audit\InterfaceAudit;
use App\Utils\Authentication\InterfaceAuthentication;

class AuditController extends baseController {
    protected $authentication;
    protected $audit;

    public function __construct(InterfaceAuthentication $authentication, InterfaceAudit $audit)
    {
        $this->authentication = $authentication;
        $this->audit = $audit;
    }

    public function Index()
    {
        $this->authentication($this->authentication->isAuth());

        $audits = $this->audit->get();

        $user_model = new User();

        foreach ($audits as $audit) {
            $audit->usr_aud = $user_model->getByOne('id', $audit->usr_aud);
        }

        $this->view('Audit/Inicio', [
            'title' => 'Auditoria',
            'audits' => $audits
        ], true);
    }
}
