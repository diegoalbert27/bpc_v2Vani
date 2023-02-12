export default class ApiServices {
    constructor() {
        this.service = axios
        this.baseUrl = null

        this.headers = {
            "Content-Type": "multipart/form-data"
        }
    }

    setBaseUrl(controller, action = '') {
        this.baseUrl = `?controller=${controller}`

        if (action !== '') {
            this.baseUrl += `&action=${action}`
        }
    }

    async get() {
        try {
            const response = await this.service.get(this.baseUrl)
            return response
        } catch (error) {
            console.error(error)
        }
    }

    async post(data) {
        try {
            const response = await this.service.post(this.baseUrl, data, { headers: this.headers })
            return response
        } catch (error) {
            console.error(error)
        }
    }
}
