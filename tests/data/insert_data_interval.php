<?php

use App\Models\Solicitante;

require_once __DIR__ . '/../../vendor/autoload.php';

require_once '../factory/factory.php';
require_once '../factory/solicitante_factory.php';

if (isset($_GET['send'])) {
    if ($_GET['send'] === 'ok') {
        $results = factory(Solicitante::class, $placeholder, 100);
        echo json_encode($results);
        exit();
    }
}

?>
<html>

<head>
    <style>
        .table {
            border: 1px solid black;
        }

        .table thead th {
            padding: 10px;
            border: 1px solid black;
        }

        .table tbody td {
            padding: 5px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>Cantidad Total <span id="total">0</span></h1>
    <table class="table">
        <thead>
            <tr>
                <th>Carnet</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cedula</th>
                <th>Edad</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Email</th>
                <th>Sexo</th>
            </tr>
        <tbody id="solicitantes"></tbody>
        </thead>
    </table>
    <script>
        function sendSolicitante() {
            const url = '?send=ok'

            fetch(url)
                .then(res => res.json())
                .then(data => {
                    const tbody = document.getElementById('solicitantes')
                    const span = document.getElementById('total')

                    let rows = ''
                    data.forEach(solicitante => {
                        const row = `
                        <tr>
                            <td>${solicitante.carnet}</td>
                            <td>${solicitante.nom_sol}</td>
                            <td>${solicitante.ape_sol}</td>
                            <td>${solicitante.ced_sol}</td>
                            <td>${solicitante.edad_sol}</td>
                            <td>${solicitante.tlf_sol}</td>
                            <td>${solicitante.dir_sol}</td>
                            <td>${solicitante.corr_sol}</td>
                            <td>${solicitante.sex_sol}</td>
                        </tr>
                    `

                        rows += row
                    })

                    tbody.innerHTML += rows
                    span.innerText = Number(span.innerText) + data.length
                })
        }

        setTimeout(() => sendSolicitante(), 5000)
    </script>
</body>

</html>
