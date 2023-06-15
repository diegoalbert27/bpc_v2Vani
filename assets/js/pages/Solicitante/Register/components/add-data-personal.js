import SolicitanteApi from "../../api/solicitante-api.js"

export default class AddDataPersonal {
    constructor() {
        this.btn = document.getElementById('add-data-personal')

        this.carnet = document.getElementById('carnet')
        this.nombres = document.getElementById('names')
        this.apellidos = document.getElementById('lastNames')
        this.cedula = document.getElementById('cedula')
        this.edad = document.getElementById('edad')
        this.sexo = document.getElementById('sexo')

        this.inputs = [
            this.carnet,
            this.nombres,
            this.apellidos,
            this.cedula,
            this.edad,
        ]

        this.patterns = {
            carnet: /\d$/,
            names: /^[a-zA-ZÀ-ÿ\W\s]{3,40}$/,
            lastNames: /^[a-zA-ZÀ-ÿ\W\s]{3,40}$/,
            cedula: /^\d{4,14}$/,
            edad: /^\d{2}$/,
        }

        this.solicitantes = null
        this.solicitanteApi = new SolicitanteApi()

        this.getUsers()
    }

    onClick(callback) {
        this.btn.onclick = (e) => {
            if (this.validateInputs(this.inputs)) return

            callback(
                this.carnet.value,
                this.nombres.value,
                this.apellidos.value,
                this.cedula.value,
                this.edad.value,
                this.sexo.value
            )
        }
    }

    onBlur() {
        for (const input of this.inputs) {
            input.onblur = async (e) => {
                if (this.isCorrectInput(input)) {
                    this.inputPassed(input)

                    if (input.name === 'cedula') {
                        this.validateField('ced_sol', input.value) ? this.inputUserPassed(input) : this.inputUserNotPassed(input)
                    }

                    if (input.name === 'carnet') {
                        this.validateField('carnet', input.value) ? this.inputUserPassed(input) : this.inputUserNotPassed(input)
                    }

                    return
                }

                this.inputNotPassed(input)
            }
        }
    }

    onKeyup() {
        for (const input of this.inputs) {
            input.onkeyup = async (e) => {
                if (this.isCorrectInput(input)) {
                    this.inputPassed(input)

                    if (input.name === 'cedula') {
                        this.validateField('ced_sol', input.value) ? this.inputUserPassed(input) : this.inputUserNotPassed(input)
                    }

                    if (input.name === 'carnet') {
                        this.validateField('carnet', input.value) ? this.inputUserPassed(input) : this.inputUserNotPassed(input)
                    }

                    return
                }

                this.inputNotPassed(input)
            }
        }
    }

    validateInputs(inputs) {
        let someEmpty = false

        for (const input of inputs) {
            if (this.isCorrectInput(input)) {
                this.inputPassed(input)
                continue
            }

            this.inputNotPassed(input)

            someEmpty = true
        }

        return someEmpty
    }

    isCorrectInput(input) {
        return this.patterns[input.name].test(input.value)
    }

    inputPassed(input) {
        input.classList.remove('formulario__grupo-incorrecto')

        document
            .getElementById(`valid-${input.id}`)
            .classList.add('d-none')
    }

    inputNotPassed(input) {
        input.classList.add('formulario__grupo-incorrecto')

        document
            .getElementById(`valid-${input.id}`)
            .classList.remove('d-none')
    }

    inputUserPassed(input) {
        input.classList.remove('formulario__grupo-incorrecto')

        document
            .getElementById(`valid-repeat-${input.id}`)
            .classList.add('d-none')
    }

    inputUserNotPassed(input) {
        input.classList.add('formulario__grupo-incorrecto')

        document
            .getElementById(`valid-repeat-${input.id}`)
            .classList.remove('d-none')
    }

    async getUsers() {
        this.solicitantes = await this.solicitanteApi.getAll()
    }

    validateField(field, value) {
        const solicitente = this.solicitantes.data.find(solicitante => String(solicitante[field]) === String(value))
        return solicitente === undefined
    }
}
