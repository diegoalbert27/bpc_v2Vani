import Alert from "../../../Solicitante/Register/components/alert.js"

export default class GeneratePrestamo {
    constructor() {
        this.btn = document.getElementById('generate-prestamo')

        this.inputSolicitanteCedula = document.getElementById('solicitante_cedula')
        this.inputLibro = document.getElementById('libro')
        this.observaciones = document.getElementById('observaciones')
        this.fechaDevolucion = document.getElementById('fecha_devolucion')

        this.alert = new Alert('alert')
    }

    onClick(callback) {
        this.btn.onclick = () => {
            if (this.inputSolicitanteCedula.value === '') {
                return this.alert.show('El campo solicitante es requerido')
            }

            this.alert.hide()

            if (this.inputLibro.value === '') {
                return this.alert.show('El campo libro es requerido')
            }

            this.alert.hide()

            this.btn.disabled = true

            callback({
                solicitante: this.inputSolicitanteCedula.value,
                libro: this.inputLibro.value,
                observaciones: this.observaciones.value,
                fechaDevolucion: this.fechaDevolucion.value
            })
        }
    }
}
