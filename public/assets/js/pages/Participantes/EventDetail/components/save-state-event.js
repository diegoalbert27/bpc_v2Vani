export default class SaveStateEvent {
    constructor() {
        this.btn = document.getElementById('save-state-event')
        this.urlDefault = this.btn.href
    }

    showBtn() {
        this.btn.classList.remove('d-none')
    }

    hideBtn() {
        this.btn.classList.add('d-none')
    }

    newStateUrl(state) {
        const stateUrl = `state=${state}`
        this.btn.href = `${this.urlDefault}&${stateUrl}`
    }
}
