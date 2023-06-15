import EventApi from "../../Event/api/events-api.js";
import NavCalendar from "./components/nav-calendar.js";
import ViewDefaulEvents from "./components/view-defaul-events.js";

export default class View {
    constructor() {
        this.eventApi = new EventApi()
        this.calendar = document.getElementById('calendar')

        this.defaultEvents = document.getElementsByClassName('defaul-events')
        this.notEvent = document.getElementById('not-event')
        this.notEventMonth = document.getElementById('not-event-month')

        this.currentDate = new Date()
        this.currentMonth = this.currentDate.getMonth()
        this.currentYear = this.currentDate.getFullYear()

        this.viewDefaulEvents = new ViewDefaulEvents
        this.viewDefaulEvents.onClick(() => {
            this.notEvent.classList.add('d-none')
            this.showDefaultEvents(this.currentMonth, this.currentYear)
        })

        this.showDefaultEvents(this.currentMonth, this.currentYear)
        this.renderCalendar()
          .then(() => {
            const navCalendar = new NavCalendar()
            navCalendar.previusOnClick(() => {
                this.changeDate(false)
                this.showDefaultEvents(this.currentMonth, this.currentYear)
            })
            navCalendar.nextOnClick(() => {
                this.changeDate(true)
                this.showDefaultEvents(this.currentMonth, this.currentYear)
            })
          })
    }

    changeDate(isNext) {
        if (isNext) {
            this.currentMonth++

            if (this.currentMonth >= 12) {
                this.currentMonth = 0
                this.currentYear++
            }
        } else {
            this.currentMonth--

            if (this.currentMonth <= 0) {
                this.currentMonth = 12
                this.currentYear--
            }
        }
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

    /**
     * Muestra todos los eventos por el mes y el año
     * @param {Number} currentMonth
     * @param {Number} currentYear
     */
    async showDefaultEvents(currentMonth, currentYear) {
        let eventShoweds = 0
        for (const defaultEvent of this.defaultEvents) {
            const eventId = defaultEvent.id
            const events = await this.getAllEvents()
            const event = events.find(event => Number(event.id_event) === Number(eventId))

            const dateRealizedEvent = new Date(event.date_realized_event)
            const eventMonth = dateRealizedEvent.getUTCMonth()
            const eventYear = dateRealizedEvent.getUTCFullYear()

            if (currentMonth === eventMonth && currentYear === eventYear) {
                defaultEvent.classList.remove('d-none')
                eventShoweds++
            } else {
                defaultEvent.classList.add('d-none')
            }

            if (eventShoweds <= 0) {
                this.notEvent.classList.add('d-none')
                this.notEventMonth.classList.remove('d-none')
            } else {
                this.notEventMonth.classList.add('d-none')
            }
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
                    this.notEventMonth.classList.add('d-none')
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
