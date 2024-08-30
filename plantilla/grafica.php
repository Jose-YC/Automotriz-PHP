<?php

include 'conexion/conexion.php';
$sql = "SELECT * FROM problemas";
$ejecutando = mysqli_query($conexion, $sql);
$ejecutando1 = mysqli_query($conexion, $sql);
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                while ($row = mysqli_fetch_array($ejecutando)) {

                    echo "'" . ($row['nombre']) . "',";
                }
                ?>
            ],
            datasets: [{
                label: 'Problema mas buscado',
                data: [17, 15, 7, 4, 2],
                backgroundColor: [

                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'

                ],
                borderColor: [

                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    //-------------------------------------------------------------
    var ctx = document.getElementById('myChart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [
                <?php
                while ($row = mysqli_fetch_array($ejecutando1)) {

                    echo "'" . ($row['nombre']) . "',";
                }
                ?>
            ],
            datasets: [{
                label: '# of Votes',
                data: [500, 725, 250, 540],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',

                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    //---------------------------------------------------------------
    var ctx = document.getElementById('myChart3').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Mayo', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Noviembre'],
            datasets: [{
                    label: 'vehiculos de hombres',
                    data: [8, 17, 7, 1, 25, 20, 20],
                    borderColor: 'rgb(255,0, 0)',

                },
                {
                    label: 'vehiculos de mujeres',
                    data: [2, 13, 1, 11, 15, 10, 60],
                    borderColor: 'rgb(0, 0, 255)',

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
    //-----------------------------------------------------------------
    var ctx = document.getElementById('myChart4').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Mayo', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Noviembre'],
            datasets: [{
                label: 'Cantidad de vehiculos antendidos en los ultimos 7 mese',
                fill: {
                    target: 'origin',
                    above: 'rgb(75, 192, 192)', // Area will be red above the origin
                    below: 'rgb(75, 192, 192)' // And blue below the origin
                },
                data: [10, 30, 8, 12, 40, 30, 80],
                borderColor: 'rgb(75, 192, 192)',
                tension: 0
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>