export default class SearchLibro {
    constructor() {
        this.input = document.getElementById('libro')
    }

    onKeyup(callback) {
        this.input.onkeyup = (e) => callback(e.target.value)
    }
}
