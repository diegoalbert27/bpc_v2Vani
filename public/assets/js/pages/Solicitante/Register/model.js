export default class Model {
    constructor() {
        this.data = {}
    }

    getData() {
        return this.data
    }

    addDataPersonal({ nombres, apellidos, cedula, edad, sexo }) {
        this.data.nombres = nombres
        this.data.apellidos = apellidos
        this.data.cedula = cedula
        this.data.edad = edad
        this.data.sexo = sexo

        return this.data
    }

    addDataContact({ phone, email, address }) {
        this.data.phone = phone
        this.data.email = email
        this.data.address = address

        return this.data
    }
}
