import ApiServices from '../../utils/api-services.js'

export default class EventApi extends ApiServices {
    constructor() {
        super()
        this.controller = 'event'
    }

    async getAllEventsPendientes() {
        this.setBaseUrl(this.controller, 'geteventspendients')
        const response = await this.get()
        return response.data
    }

    async getAll() {
        this.setBaseUrl(this.controller, 'get')
        const response = await this.get()
        return response.data
    }
}
