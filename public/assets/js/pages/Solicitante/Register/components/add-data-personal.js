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
                        await this.validateCedula(input.value) ? this.cedulaPassed(input) : this.cedulaNotPassed(input)
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
                        await this.validateCedula(input.value) ? this.cedulaPassed(input) : this.cedulaNotPassed(input)
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

    cedulaPassed(input) {
        input.classList.remove('formulario__grupo-incorrecto')

        document
            .getElementById(`valid-repeat-${input.id}`)
            .classList.add('d-none')
    }

    cedulaNotPassed(input) {
        input.classList.add('formulario__grupo-incorrecto')

        document
            .getElementById(`valid-repeat-${input.id}`)
            .classList.remove('d-none')
    }

    async validateCedula(cedula) {
        const solicitanteApi = new SolicitanteApi()
        const solicitantes = await solicitanteApi.getAll()

        const solicitente = solicitantes.data.find(solicitante => Number(solicitante.ced_sol) === Number(cedula))

        return solicitente === undefined
    }
}
