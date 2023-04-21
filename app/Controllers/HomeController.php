<?php

use App\Core\baseController;
use App\Models\Event;
use App\Models\Libro;

class HomeController  extends baseController
{
    public function Index()
    {
        $libro_model = new Libro();
        $libros = $libro_model->getAll();

        $show_books = [];

        foreach ($libros as $key => $libro) {
            if ($key <= 7) {
                $show_books[] = $libro;
            }
        }

        $event_model = new Event();
        $events = $event_model->getAll();

        $events_pendientes = array_filter($events, fn($event) => (int) $event->state_event === 2);

        usort($events_pendientes, fn($a, $b) => strtotime($a->date_realized_event) - strtotime($b->date_realized_event));

        $this->view('LandingPage/Inicio', [
            'title' => 'Inicio',
            'libros' => $show_books,
            'events_pendientes' => $events_pendientes
        ]);
    }
}
