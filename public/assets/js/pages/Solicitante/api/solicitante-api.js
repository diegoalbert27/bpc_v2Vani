import ApiServices from '../../utils/api-services.js'

export default class SolicitanteApi extends ApiServices {
    constructor() {
        super()
        this.controller = 'solicitante'
    }

    async getAll() {
        this.setBaseUrl(this.controller, 'get')
        const response = await this.get()
        return response
    }

    async add(solicitante) {
        this.setBaseUrl(this.controller, 'add')
        const response = await this.post(solicitante)
        return response
    }
}
