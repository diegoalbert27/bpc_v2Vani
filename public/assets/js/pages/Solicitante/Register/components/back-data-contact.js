export default class BackDataContact {
    constructor() {
        this.btn = document.getElementById('back-data-contact')
    }

    onClick(callback) {
        this.btn.onclick = (e) => callback()
    }
}
