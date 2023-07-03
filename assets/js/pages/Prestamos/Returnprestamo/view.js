import ReturnPrestamo from "./components/return-prestamo.js";
import SelectCalification from "./components/select-calification.js";

export default class View {
    constructor() {
        this.okPrestamo = document.getElementById('ok-prestamo')
        this.observationReturn = document.getElementById('observation-return')

        this.calification = 0

        this.returnPrestamo = new ReturnPrestamo()
        this.returnPrestamo.onClick((prestamo) => this.changePrestamo(prestamo, this.observationReturn.value, this.calification))

        this.selectCalification = new SelectCalification()
        this.selectCalification.onClick((calification) => this.calification = calification)
    }

    changePrestamo(prestamo, observation, calification) {
        this.okPrestamo.href = `?controller=prestamos&action=changeprestamo&id=${prestamo}&observation=${observation}&calification=${calification}`
    }
}
