export default class ViewDefaulEvents {
    constructor() {
        this.btn = document.getElementById('view-defaul-events')
    }

    onClick(callback) {
        this.btn.onclick = () => callback()
    }
}
