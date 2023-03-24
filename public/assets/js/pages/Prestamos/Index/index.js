document.addEventListener('DOMContentLoaded', () => {
    const years = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
    'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

    const africa = [1000, 114, 313, 106, 107, 111, 133, 221, 783, 478, 12, 333];

    var ctx = document.getElementById("chart");

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: years,
            datasets: [
                {
                    label: 'Prestamos',
                    data: africa,
                    fill: false,
                }
            ]
        }
    });
})
