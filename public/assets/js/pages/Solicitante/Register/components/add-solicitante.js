export default class AddSolicitante {
    constructor() {
        this.btn = document.getElementById('add-solicitante')

        this.ocupacion = document.getElementById('ocupacion')
        this.nameOcupacion = document.getElementById('nameOcupacion')
        this.phoneOcupacion = document.getElementById('phoneOcupacion')
        this.addressOcupacion = document.getElementById('addressOcupacion')

        this.inputs = [
            this.nameOcupacion,
            this.phoneOcupacion,
            this.addressOcupacion,
        ]

        this.patterns = {
            nameOcupacion: /[a-zA-ZÀ-ÿ0-9\s_.,+-]/,
            phoneOcupacion: /^\d{7,14}$/,
            addressOcupacion: /[a-zA-ZÀ-ÿ0-9\s_.,+-]/,
        }
    }

    onClick(callback) {
        this.btn.onclick = (e) => {
            if (this.ocupacion.value !== 'Ninguno') {
                if (this.validateInputs(this.inputs)) return
            }

            this.inputsPassed(this.inputs)

            callback(
                this.ocupacion.value,
                this.nameOcupacion.value,
                this.phoneOcupacion.value,
                this.addressOcupacion.value
            )
        }
    }

    onBlur() {
        for (const input of this.inputs) {
            input.onblur = (e) => {
                if (this.isCorrectInput(input)) {
                    this.inputPassed(input)
                    return
                }

                if (this.ocupacion.value !== 'Ninguno') {
                    this.inputNotPassed(input)
                    return
                }

                this.inputPassed(input)
            }
        }
    }

    onKeyup() {
        for (const input of this.inputs) {
            input.onkeyup = (e) => {
                if (this.isCorrectInput(input)) {
                    this.inputPassed(input)
                    return
                }

                if (this.ocupacion.value !== 'Ninguno') {
                    this.inputNotPassed(input)
                    return
                }

                this.inputPassed(input)
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

    inputsPassed(inputs) {
        for (const input of inputs) {
            this.inputPassed(input)
        }
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
}
