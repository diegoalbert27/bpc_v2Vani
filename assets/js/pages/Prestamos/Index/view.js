import PrestamoApi from "../api/prestamo-api.js";
import ChangeYear from "./components/change-year.js";

export default class View {
    constructor() {
        this.years = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

        this.prestamos = null
        this.prestamoStadistics = null
        this.currentDate = new Date()

        this.chart = null

        this.prestamoApi = new PrestamoApi()

        this.changeYear = new ChangeYear()
        this.changeYear.onChange((year) => this.showStadisticsByYear(year))

        this.renderStadistics().then(() => this.renderOptionYears())
    }

    async renderStadistics() {
        const response = await this.prestamoApi.getAll()
        this.prestamos = response.data.data

        const prestamosByYear = this.prestamos.filter(prestamo => new Date(prestamo.fecha_entrega).getUTCFullYear() === this.currentDate.getUTCFullYear())

        const prestamosByMounth = {}
        this.years.forEach((_, index) => prestamosByMounth[index] = [])

        prestamosByYear.forEach(prestamo => prestamosByMounth[new Date(prestamo.fecha_entrega).getUTCMonth()].push(prestamo))

        this.prestamoStadistics = Object.values(prestamosByMounth).map(prestamo => prestamo.length)

        let ctx = document.getElementById("chart");

        this.chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: this.years,
                datasets: [
                    {
                        label: 'Prestamos',
                        data: this.prestamoStadistics,
                        fill: false,
                    }
                ]
            }
        });
    }

    renderOptionYears() {
        let years = this.prestamos
            .map(prestamo => new Date(prestamo.fecha_entrega).getUTCFullYear())

        years = [...new Set(years)].sort((a, b) => b - a)

        this.changeYear.insertOption(years)
    }

    async showStadisticsByYear(year) {
        this.chart.destroy()

        this.currentDate = new Date(year)
        await this.renderStadistics()
    }
}
