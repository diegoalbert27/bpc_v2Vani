document.addEventListener('DOMContentLoaded', () => {
    const years = ['Inauguración', 'Los chamorrucos', 'Los panas', 'Los vatos', 'Pa la fiesta', 'Prueba 1', 'Prueba 2'];

    const africa = [1000, 114, 313, 106, 107, 111, 133];

    var ctx = document.getElementById("chart");

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: years,
            datasets: [
                {
                    label: 'Eventos',
                    data: africa,
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
})
