import AddLibro from "./components/add-libro.js"
import AddSolicitante from "./components/add-solicitante.js"
import SearchSolicitante from "./components/search-solicitante.js"
import SearchLibro from "./components/search-libro.js"
import GeneratePrestamo from "./components/generate-prestamo.js"
import Alert from "../../Solicitante/Register/components/alert.js"

export default class View {
    constructor() {
        this.model = null

        this.inputSolicitanteCedula = document.getElementById('solicitante_cedula')
        this.inputSolicitanteName = document.getElementById('solicitante_name')

        this.inputLibro = document.getElementById('libro')
        this.inputLibroTitle = document.getElementById('libro_title')

        this.btnGeneratePrestamo = document.getElementById('generate-prestamo')
        this.alert = new Alert('alert')

        this.addSolicitante = new AddSolicitante()
        this.addSolicitante.onClick((solicitante) => this.setInputSolicitante(solicitante))

        this.addLibro =  new AddLibro()
        this.addLibro.onClick((libro) => this.setInputLibro(libro))

        this.searchSolicitante = new SearchSolicitante()
        this.searchSolicitante.onKeyup((cedula) => this.searchSolicitanteByCedula(cedula))

        this.searchLibro = new SearchLibro()
        this.searchLibro.onKeyup((cota) => this.searchLibroByCota(cota))

        this.generatePrestamo = new GeneratePrestamo()
        this.generatePrestamo.onClick((prestamo) => this.addPrestamo(prestamo))

        this.prestamoForm = document.getElementById('prestamoForm')
        this.prestamoChecked = document.getElementById('prestamoChecked')

        this.prestamoLink = document.getElementById('prestamoLink')
    }

    setModel(model) {
        this.model = model
    }

    setInputSolicitante(solicitante) {
        this.inputSolicitanteCedula.value = solicitante.cedula

        this.inputSolicitanteName.classList.remove('d-none')
        this.inputSolicitanteName.value = solicitante.name
    }

    setInputLibro(libro) {
        this.inputLibro.value = libro.cota

        this.inputLibroTitle.classList.remove('d-none')
        this.inputLibroTitle.value = libro.libro
    }

    searchSolicitanteByCedula(cedula) {
        const solicitante = this.model.solicitantes
            .find(solicitante => String(solicitante.ced_sol) === cedula)

        this.inputSolicitanteName.classList.remove('d-none')
        this.inputSolicitanteName.value = solicitante !== undefined ? `${solicitante.nom_sol} - ${solicitante.ape_sol}` : 'No encontrado'
    }

    searchLibroByCota(cota) {
        const libro = this.model.libros
            .find(libro => libro.cota === cota)

        this.inputLibroTitle.classList.remove('d-none')
        this.inputLibroTitle.value = libro !== undefined ? `${libro.titulo} - ${libro.categoria.name}` : 'No encontrado'
    }

    async addPrestamo(prestamo) {
        const { data } = await this.model.addPrestamo(prestamo)

        this.btnGeneratePrestamo.disabled = false

        if (!data.status) {
            return this.alert.show(data.message)
        }

        this.alert.hide()

        this.prestamoForm.classList.add('d-none')
        this.prestamoChecked.classList.remove('d-none')

        this.prestamoLink.href = `?controller=prestamos&action=details&id=${data.data.id_prestamo}`
    }
}
