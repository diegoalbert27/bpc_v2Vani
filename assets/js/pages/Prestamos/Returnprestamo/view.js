import ReturnPrestamo from "./components/return-prestamo.js";

export default class View {
    constructor() {
        this.okPrestamo = document.getElementById('ok-prestamo')

        this.returnPrestamo = new ReturnPrestamo()
        this.returnPrestamo.onClick((prestamo) => this.changePrestamo(prestamo))
    }

    changePrestamo(prestamo) {
        this.okPrestamo.href = `?controller=prestamos&action=changeprestamo&id=${prestamo}`
    }
}
