export default class AddDataContact {
    constructor() {
        this.btn = document.getElementById('add-data-contact')

        this.phone = document.getElementById('phone')
        this.email = document.getElementById('email')
        this.address = document.getElementById('address')

        this.inputs = [
            this.phone,
            this.email,
            this.address,
        ]

        this.patterns = {
            phone: /^\d{7,14}$/,
            email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
            address: /[a-zA-Z0-9\s_.,+-]/,
        }
    }

    onClick(callback) {
        this.btn.onclick = (e) => {
            if (this.validateInputs(this.inputs)) return

            callback(
                this.phone.value,
                this.email.value,
                this.address.value,
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

                this.inputNotPassed(input)
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
}
