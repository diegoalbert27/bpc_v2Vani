export default class SearchSolicitante {
    constructor() {
        this.input = document.getElementById('solicitante_cedula')
    }

    onKeyup(callback) {
        this.input.onkeyup = (e) => callback(e.target.value)
    }
}
