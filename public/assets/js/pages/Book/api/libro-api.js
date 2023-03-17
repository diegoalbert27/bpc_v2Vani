import ApiServices from '../../utils/api-services.js'

export default class LibroApi extends ApiServices {
    constructor() {
        super()
        this.controller = 'libro'
    }

    async getAll() {
        this.setBaseUrl(this.controller, 'get')
        const response = await this.get()
        return response.data
    }
}
