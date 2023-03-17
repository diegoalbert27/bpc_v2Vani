import LibroApi from "../../Book/api/libro-api.js";
import SolicitanteApi from "../../Solicitante/api/solicitante-api.js";
import PrestamoApi from "../api/prestamo-api.js";

export default class Model {
    constructor() {
        this.libroApi = new LibroApi()
        this.solicitanteApi = new SolicitanteApi()

        this.solicitantes = []
        this.libros = []

        this.reload()
    }

    async reload() {
        const solicitantes = await this.solicitanteApi.getAll()
        const libros = await this.libroApi.getAll()

        this.solicitantes = [...solicitantes.data]
        this.libros = [...libros.data]
    }

    async addPrestamo(prestamo) {
        const prestamoApi = new PrestamoApi()

        const newPrestamo = {
            solicitante: prestamo.solicitante,
            libro: prestamo.libro,
            observaciones: prestamo.observaciones,
            fecha_devolucion: prestamo.fechaDevolucion
        }

        const response = await prestamoApi.add(newPrestamo)
        return response
    }
}
