<?php

use App\Core\baseController;
use App\Core\helpers;
use App\Models\Inventario;
use App\Models\Libro;
use App\Models\Prestamo;
use App\Models\Role;
use App\Models\Solicitante;
use App\Utils\Authentication\InterfaceAuthentication;

class DashboardController extends baseController
{
    protected $authentication;
    protected $helpers;

    public function __construct(InterfaceAuthentication $authentication)
    {
        $this->authentication = $authentication;

        $this->helpers = new helpers();
    }

    public function Index()
    {
        $this->authentication($this->authentication->isAuth());

        $prestamo_model = new Prestamo();
        $prestamos = $prestamo_model->getAll();

        $libro_model = new Libro();
        $solicitante_model = new Solicitante();

        $user = $this->helpers->getSession();

        foreach ($prestamos as $prestamo) {
            $prestamo->numero_carnet2 = $solicitante_model->getByOne('id_sol', $prestamo->numero_carnet2);
            $prestamo->id_libro2 = $libro_model->getByOne('id_libro', $prestamo->id_libro2);
        }

        $prestamos = array_filter($prestamos, fn($prestamo) => (int) $prestamo->pendiente !== 1);

        if (count($prestamos) >= 3) {
            array_splice($prestamos, 3);
        }

        $libro_model = new Libro();
        $libros = $libro_model->getAll();

        $inventario_model = new Inventario();

        $total_libros = 0;
        $total_libros_actual = 0;

        foreach($libros as $libro) {
            $inventario = $inventario_model->getByOne('id_inv', $libro->cantidad);

            $total_libros += (int) $inventario->total_inv;
            $total_libros_actual += (int) $inventario->cant_inv;
        }

        $total_libros_prestado = $total_libros - $total_libros_actual;

        $this->view('Dashboard/Dashboard', [
            'title' => 'Dashboard',
            'prestamos' => $prestamos,
            'user' => $user,
            'total_libros' => $total_libros,
            'total_libros_actual' => $total_libros_actual,
            'total_libros_prestado' => $total_libros_prestado,
        ], true);
    }
}
