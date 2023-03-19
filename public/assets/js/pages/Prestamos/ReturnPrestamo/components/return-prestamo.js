export default class ReturnPrestamo {
    constructor() {
        this.btns = document.getElementsByClassName('return-prestamo')
    }

    onClick(callback) {
        for (const btn of this.btns) {
            btn.onclick = () => {
                callback(btn.dataset.prestamo)
            }
        }
    }
}
