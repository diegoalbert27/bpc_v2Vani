export default class ChangeStateEvent {
    constructor() {
        this.select = document.getElementById('state_event')
        this.stateDefault = this.select.value
    }

    getStateDefault() {
        return this.stateDefault
    }

    onChange(callback) {
        this.select.onchange = () => {
            const state = this.select.value
            callback(state)
        }
    }
}
