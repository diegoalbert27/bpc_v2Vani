import ApiServices from '../../utils/api-services.js'

export default class PrestamoApi extends ApiServices {
    constructor() {
        super()
        this.controller = 'prestamos'
    }

    async add(prestamo) {
        this.setBaseUrl(this.controller, 'add')
        const response = await this.post(prestamo)
        return response
    }
}
