export default class ChangeStatus {
    constructor(organizerId, status) {
        this.btn = document.getElementById('btn-change-status')

        this.status = status
        this.organizerId = organizerId
    }

    onClick(callback) {
        this.btn.onclick = () => {
            this.cleanButton()

            if (this.status === 0) {
                this.btn.classList.add('btn-outline-primary')
                this.btn.innerText = 'Activo'

                callback(this.organizerId, 1)
            }

            if (this.status === 1) {
                this.btn.classList.add('btn-outline-danger')
                this.btn.innerText = 'Inactivo'

                callback(this.organizerId, 0)
            }
        }
    }

    cleanButton() {
        this.btn.classList.remove('btn-outline-danger')
        this.btn.classList.remove('btn-outline-primary')
    }
}
