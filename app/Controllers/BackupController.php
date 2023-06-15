<?php

use App\Core\baseController;
use App\Models\Backup;
use App\Utils\Authentication\InterfaceAuthentication;

use Rah\Danpu\Dump;
use Rah\Danpu\Export;
use Rah\Danpu\Import;

class BackupController extends baseController {
    protected $authentication;

    public function __construct(InterfaceAuthentication $authentication)
    {
        $this->authentication = $authentication;
    }

    public function Index()
    {
        $this->authentication($this->authentication->isAuth());

        $backup_model = new Backup();
        $backup = $backup_model->getAll();

        $this->view('Backup/Inicio', [ 'title' => 'Gestion de BD', 'backup' => $backup ], true);
    }

    public function Export()
    {
        $this->authentication($this->authentication->isAuth());

        try {
            $file_path = __DIR__ . "/../../backup/";

            if ( !is_dir($file_path) ) {
                mkdir($file_path, 0777, true);
                chmod($file_path, 0777);
            }

            $file = "backup/" . uniqid() . '-' . date('Y-m-d') . "-db.sql";

            $dump = new Dump;
            $dump
                ->file($file)
                ->dsn('mysql:host=localhost;dbname=bpcac_v2;charset=utf8')
                ->user('root')
                ->pass('')
                ->tmp('/tmp');

            new Export($dump);

            $backup_model = new Backup([
                'id' => null,
                'url' => "./{$file}"
            ]);

            $backup_model->save();

            $this->redirect('backup', 'index', 'success', 'El respaldo se ha generado con exito');
        } catch (\Exception $e) {
            $this->redirect('backup', 'index', 'danger', 'Export failed with message: ' . $e->getMessage());
        }
    }

    public function Import()
    {
        $this->authentication($this->authentication->isAuth());

        if (!isset($_FILES['file']) || empty($_FILES['file']['tmp_name'])) {
            $this->redirect('backup', 'index', 'danger', 'EL archivo es necesario para la importacion');
            return;
        }

        $file_path = __DIR__ . "/../../backup/";

        if ( !is_dir($file_path) ) {
            mkdir($file_path, 0777, true);
            chmod($file_path, 0777);
        }

        $file = $_FILES['file']['tmp_name'];

        try {
            $dump = new Dump;
            $dump
                ->file($file)
                ->dsn('mysql:host=localhost;dbname=bpcac_v2;charset=utf8')
                ->user('root')
                ->pass('')
                ->tmp('/tmp');

            new Import($dump);

            $this->redirect('backup', 'index', 'success', 'La importacion del respaldo se ha generado con exito');
        } catch (\Exception $e) {
            $this->redirect('backup', 'index', 'danger', 'Export failed with message: ' . $e->getMessage());
        }
    }
}
