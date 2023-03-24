import ChangeStatus from "./components/change-status.js";
import ViewOrganizer from "./components/view-organizers.js";

export default class View {
    constructor() {
        this.modalOrganizerName = document.getElementById('modal-organizer-name')
        this.btnChangeStatus = document.getElementById('btn-change-status')
        this.sendOrganizer = document.getElementById('send-organizer')

        this.viewOrganizer = new ViewOrganizer()
        this.viewOrganizer.onClick((btn, organizer) => this.showOrganizer(btn, organizer))

        this.changeStatus = null
    }

    showOrganizer(btn, organizer) {
        this.btnChangeStatus.classList.remove('btn-outline-danger')
        this.btnChangeStatus.classList.remove('btn-outline-primary')

        this.modalOrganizerName.innerText = organizer.name

        const state = Number(organizer.state)

        if (state === 0) {
            this.btnChangeStatus.classList.add('btn-outline-danger')
            this.btnChangeStatus.innerText = 'Inactivo'
        }

        if (state === 1) {
            this.btnChangeStatus.classList.add('btn-outline-primary')
            this.btnChangeStatus.innerText = 'Activo'
        }

        this.sendOrganizer.href = `?controller=organizer&action=editstatus&id=${organizer.id}&status=${organizer.state}`

        this.changeStatus = new ChangeStatus(organizer.id, state)
        this.changeStatus.onClick((OrganizerId, state) => this.changeStatusView(btn, state))
    }

    changeStatusView(btn, state) {
        btn.dataset.state = state

        const { id, name } = btn.dataset

        this.showOrganizer(btn, {
            id,
            state,
            name
        })
    }
}
