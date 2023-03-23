<?php

use App\Core\baseController;
use App\Models\Event;
use App\Models\EventParticipant;
use App\Models\User;
use App\Utils\Authentication\InterfaceAuthentication;

class ParticipantesController extends baseController
{
    protected $authentication;

    public function __construct(InterfaceAuthentication $authentication)
    {
        $this->authentication = $authentication;
    }

    public function Index()
    {
        $this->authentication($this->authentication->isAuth());

        $event_model = new Event();
        $events = $event_model->getAll();

        $events_pendientes = array_filter($events, fn($event) => (int) $event->state_event === 2);

        $is_participants = [];
        $user = $this->authentication->getSession();

        $event_participant_model = new EventParticipant();

        foreach ($events_pendientes as $event) {
            $participants_by_user = $event_participant_model->getBy('id_user', $user->id);
            $event_participant = array_filter($participants_by_user, fn($participant) => (int) $participant->id_event === (int) $event->id_event);

            if (count($event_participant) > 0) {
                $is_participants[$event->id_event] = true;
            } else {
                $is_participants[$event->id_event] = false;
            }
        }

        $this->view('Participantes/Inicio', [
            'title' => 'Eventos Pendientes',
            'events_pendientes' => $events_pendientes,
            'is_participants' => $is_participants
        ], true);
    }

    public function EventDetail()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('participantes', 'index', 'danger', 'El evento ingresado no fue encontrado');
            return;
        }

        $id_event = $_GET['id'];

        $event_model = new Event();
        $event = $event_model->getByOne('id_event', $id_event);

        $event_participant_model = new EventParticipant();
        $participants = $event_participant_model->getBy('id_event', $id_event);

        $user = $this->authentication->getSession();

        $is_participant = false;

        $participants_by_user = $event_participant_model->getBy('id_user', $user->id);
        $event_participant = array_filter($participants_by_user, fn($participant) => (int) $participant->id_event === (int) $id_event);

        if (count($event_participant) > 0) {
            $is_participant = !$is_participant;
        }

        $this->view('Participantes/EventoDetalle', [
            'title' => 'Informacion de evento',
            'event' => $event,
            'participants' => $participants,
            'is_participant' => $is_participant
        ], true);
    }

    public function Add()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('participantes', 'index', 'danger', 'El evento ingresado no fue encontrado');
            return;
        }

        $id_event = $_GET['id'];

        $event_model = new Event();
        $event = $event_model->getByOne('id_event', $id_event);

        $user = $this->authentication->getSession();

        $event_participant_model = new EventParticipant();
        $participants = $event_participant_model->getBy('id_event', $id_event);

        if ($event->type_event === "Limitado" ) {
            $cupos_disponibles = (int) $event->participants_event - count($participants);

            if ($cupos_disponibles <= 0) {
                $this->redirect('participantes', 'eventdetail', 'danger', 'no se encuentran cupos disponibles para este evento', [ 'id' => $id_event ]);
                return;
            }
        }

        $new_participant = [
            'ID' => null,
            'id_user' => $user->id,
            'id_event' => $event->id_event
        ];

        $event_participant_model = new EventParticipant($new_participant);

        if ( !$event_participant_model->save() ) {
            $this->redirect('participantes', 'eventdetail', 'danger', 'Ops! Ocurrio un problema inesperado', [ 'id' => $id_event ]);
        }

        $this->redirect('participantes', 'eventdetail', 'success', 'Tu participacion ha sido agregada con exito', [ 'id' => $id_event ]);
    }

    public function Remove()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('participantes', 'index', 'danger', 'El evento ingresado no fue encontrado');
            return;
        }

        $id_event = $_GET['id'];
        $user = $this->authentication->getSession();

        $event_participant_model = new EventParticipant();

        $is_removed = $event_participant_model->deleteByParams([
            'id_event' => $id_event,
            'id_user' => $user->id
        ]);

        if ( !$is_removed ) {
            $this->redirect('participantes', 'eventdetail', 'danger', 'Ops! Ocurrio un problema inesperado', [ 'id' => $id_event ]);
        }

        $this->redirect('participantes', 'eventdetail', 'success', 'Tu participacion ha sido cancelada con exito', [ 'id' => $id_event ]);
    }

    public function Info()
    {
        $this->authentication($this->authentication->isAuth());

        if ( !isset($_GET['id']) ) {
            $this->redirect('participantes', 'index', 'danger', 'El evento ingresado no fue encontrado');
            return;
        }

        $id_event = $_GET['id'];

        $event_model = new Event();
        $event = $event_model->getByOne('id_event', $id_event);

        $event_participant_model = new EventParticipant();
        $participants = $event_participant_model->getBy('id_event', $id_event);

        $user_model = new User();

        foreach ($participants as $participant) {
            $participant->id_user = $user_model->getByOne('id', $participant->id_user);
        }

        $this->view('Participantes/Info', [
            'title' => 'Participantes',
            'event' => $event,
            'participants' => $participants
        ], true);
    }
}
