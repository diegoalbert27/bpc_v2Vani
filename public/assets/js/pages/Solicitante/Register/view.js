import AddDataPersonal from './components/add-data-personal.js';
import AddDataContact from './components/add-data-contact.js';
import AddSolicitante from './components/add-solicitante.js';
import BackDataContact from './components/back-data-contact.js';
import BackDataOcupacion from './components/back-data-ocupacion.js';

export default class View {
    constructor() {
        this.model = null

        this.datePersonalForm = document.getElementById('datePersonalForm')
        this.contactForm = document.getElementById('contactForm')
        this.ocupacionForm = document.getElementById('ocupacionForm')

        this.addDataPersonalForm = new AddDataPersonal()
        this.addDataContactForm = new AddDataContact()
        this.addSolicitanteForm = new AddSolicitante()

        this.backDataContactForm = new BackDataContact()
        this.backDataOcupacionForm = new BackDataOcupacion()

        this.barDatePersonal = document.getElementById('barDatePersonal')
        this.barContact = document.getElementById('barContact')
        this.barOcupacion = document.getElementById('barOcupacion')

        this.addDataPersonalForm.onClick((
            nombres,
            apellidos,
            cedula,
            edad,
            sexo
        ) => this.addDataPersonal({ nombres, apellidos, cedula, edad, sexo }))

        this.addDataPersonalForm.onBlur()
        this.addDataPersonalForm.onKeyup()

        this.addDataContactForm.onClick((
            phone,
            email,
            address,
        ) => this.addDataContact({ phone, email, address }))

        this.addDataContactForm.onBlur()
        this.addDataContactForm.onKeyup()

        this.addSolicitanteForm.onClick((
            ocupacion,
            nameOcupacion,
            phoneOcupacion,
            addressOcupacion
        ) => this.addSolicitante({ ocupacion, nameOcupacion, phoneOcupacion, addressOcupacion }))

        this.addSolicitanteForm.onBlur()
        this.addSolicitanteForm.onKeyup()

        this.backDataContactForm.onClick(() => this.backDataContact())
        this.backDataOcupacionForm.onClick(() => this.backDataOcupacion())
    }

    setModel(model) {
        this.model = model
    }

    addDataPersonal(dataPersonal) {
        this.model.addDataPersonal(dataPersonal)

        this.hideForm(this.datePersonalForm)
        this.showForm(this.contactForm)

        this.barDatePersonal.classList.remove('border-end')

        this.barContact.classList.add('bg-primary')
        this.barContact.classList.add('shadow')
        this.barContact.classList.add('text-light')
    }

    addDataContact(dataContact) {
        this.model.addDataContact(dataContact)

        this.hideForm(this.contactForm)
        this.showForm(this.ocupacionForm)

        this.barContact.classList.remove('border-end')

        this.barOcupacion.classList.add('bg-primary')
        this.barOcupacion.classList.add('shadow')
        this.barOcupacion.classList.add('text-light')
        this.barOcupacion.classList.add('rounded-end')
    }

    addSolicitante(dataOcupacion) {
        this.model.addDataOcupacion(dataOcupacion)

        console.log(this.model.getData())
    }

    backDataContact() {
        this.hideForm(this.contactForm)
        this.showForm(this.datePersonalForm)

        this.barDatePersonal.classList.add('border-end')

        this.barContact.classList.remove('bg-primary')
        this.barContact.classList.remove('shadow')
        this.barContact.classList.remove('text-light')
    }

    backDataOcupacion() {
        this.hideForm(this.ocupacionForm)
        this.showForm(this.contactForm)

        this.barContact.classList.add('border-end')

        this.barOcupacion.classList.remove('bg-primary')
        this.barOcupacion.classList.remove('shadow')
        this.barOcupacion.classList.remove('text-light')
        this.barOcupacion.classList.remove('rounded-end')
    }

    hideForm(form) {
        form.classList.add('d-none')
    }

    showForm(form) {
        form.classList.remove('d-none')
    }
}
