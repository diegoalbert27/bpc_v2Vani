export default class BackDataOcupacion {
    constructor() {
        this.btn = document.getElementById('back-data-ocupacion')
    }

    onClick(callback) {
        this.btn.onclick = (e) => callback()
    }
}
