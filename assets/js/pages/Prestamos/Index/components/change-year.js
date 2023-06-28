export default class ChangeYear {
    constructor() {
        this.select = document.getElementById('year-prestamo')
    }

    onChange(callback) {
        this.select.onchange = () => {
            callback(this.select.value)
        }
    }

    insertOption(options) {
        let optionsTemplate = options
            .map(option => `<option value="${option}">${option}</option>`)
            .join('')

        if (optionsTemplate === '') {
            optionsTemplate = '<option>Sin Préstamo</option>'
        }

        this.select.innerHTML = optionsTemplate
    }
}
