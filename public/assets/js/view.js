import EventApi from "./pages/Events/api/events-api.js"

export default class View {
    constructor() {
        this.notification = document.getElementById('notificacions')

        this.eventApi = new EventApi()

        if (this.notification !== null) {
            this.getNotificationsEvents()
        }
    }

    async getNotificationsEvents() {
        const response = await this.eventApi.getAllEventsPendientes()
        const events = response.data

        const current_date = new Date()
        const events_tomorrow = events
            .map(event => ({
                ...event,
                days: new Date(event.date_realized_event).getUTCDate() - current_date.getUTCDate()
            }))
            .filter(event => event.days === 1)

        const events_news = events.filter(event => new Date(event.date_created_event).getUTCDate() === current_date.getUTCDate())

        const eventsNewsNotification = events_news.map(event => this.newEvent(event))
        const eventsTomorrowNotification = events_tomorrow.map(event => this.tomorrowEvent(event))

        const notifications = eventsNewsNotification
            .concat(eventsTomorrowNotification)
            .join('')

        const div = document.createElement('div')
        div.innerHTML = notifications

        this.notification.append(div)
    }

    newEvent(event) {
        return `
            <div class="dropdown-divider"></div>
            <a class="text-dark" href="?controller=participantes&action=eventdetail&id=${event.id_event}">
            <div class="small px-4">Nuevo evento el ${event.date_realized_event}!</div>
            <p class="fw-bold px-4">${event.title_event}</p>
            </a>
        `
    }

    tomorrowEvent(event) {
        return `
            <div class="dropdown-divider"></div>
            <a class="text-dark" href="?controller=participantes&action=eventdetail&id=${event.id_event}">
            <div class="small px-4">${event.date_realized_event}!</div>
            <p class="fw-bold px-4">${event.title_event} es mañana.</p>
            </a>
        `
    }
}
