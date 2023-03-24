import EventApi from "../../Event/api/events-api.js";
import ViewDefaulEvents from "./components/view-defaul-events.js";

export default class View {
    constructor() {
        this.eventApi = new EventApi()
        this.calendar = document.getElementById('calendar')

        this.defaultEvents = document.getElementsByClassName('defaul-events')
        this.notEvent = document.getElementById('not-event')

        this.viewDefaulEvents = new ViewDefaulEvents
        this.viewDefaulEvents.onClick(() => {
            this.notEvent.classList.add('d-none')
            this.showDefaultEvents()
        })

        this.renderCalendar()
    }

    async getAllEvents() {
        const { data } = await this.eventApi.getAllEventsPendientes()
        return data
    }

    hideDefaultEvents() {
        for (const defaultEvent of this.defaultEvents) {
            defaultEvent.classList.add('d-none')
        }
    }

    showDefaultEvents() {
        for (const defaultEvent of this.defaultEvents) {
            defaultEvent.classList.remove('d-none')
        }
    }

    showEventById(id) {
        document.getElementById(id).classList.remove('d-none')
    }

    async renderCalendar() {
        const data = await this.getAllEvents()
        const events = data.map(event => ({ title: event.title_event, start: event.date_realized_event }))

        const calendar = new FullCalendar.Calendar(this.calendar, {
            locale: 'es',
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: '',
                right: 'title'
            },
            buttonText: {
                today: 'Hoy'
            },
            dateClick: (e) => {
                const dateClicked = e.dateStr
                const eventClicked = data.filter(event => event.date_realized_event === dateClicked)

                this.hideDefaultEvents()

                if (eventClicked.length === 0) {
                    return this.notEvent.classList.remove('d-none')
                }

                this.notEvent.classList.add('d-none')
                eventClicked.forEach(event => this.showEventById(event.id_event))
            },
            events
        })

        calendar.render()
    }
}
