import EventApi from "../api/events-api.js";

document.addEventListener('DOMContentLoaded', async () => {
    const eventApi = new EventApi()
    const response = await eventApi.getAll()
    const [events, participants] = response.data

    const eventsWithParticipants = events.map(event => {
        if (Array.isArray(participants[event.id_event])) {
            return { ...event, participants: participants[event.id_event] }
        } else {
            return { ...event, participants: [] }
        }
    }).sort((a, b) => b.participants.length - a.participants.length)

    const eventsPopulate = eventsWithParticipants.filter((_, index) => index <= 5)
    const events_labels = eventsPopulate.map((event, _) => event.title_event)

    const events_total_participants = eventsPopulate.map((event, _) => event.participants.length)

    var ctx = document.getElementById("chart");

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: events_labels,
            datasets: [
                {
                    label: 'Eventos',
                    data: events_total_participants,
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
})
