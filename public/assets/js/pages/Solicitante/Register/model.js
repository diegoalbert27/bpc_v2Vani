import SolicitanteApi from "../api/solicitante-api.js"

export default class Model {
    constructor() {
        this.data = {}
        this.service = new SolicitanteApi()
    }

    getData() {
        return this.data
    }

    async addData() {
        const response = await this.service.add(this.data)
        return response.data
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

    addDataOcupacion({ ocupacion, nameOcupacion, phoneOcupacion, addressOcupacion }) {
        this.data.ocupacion = ocupacion
        this.data.nameOcupacion = nameOcupacion
        this.data.phoneOcupacion = phoneOcupacion
        this.data.addressOcupacion = addressOcupacion

        return this.data
    }
}
