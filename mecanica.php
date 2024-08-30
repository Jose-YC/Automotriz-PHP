<?php
session_start();
include('plantilla/arriba.php');
include 'conexion/conexion.php';
$sql = "SELECT * FROM problemas";
$ejecutando = mysqli_query($conexion, $sql);
?>
<div class="section__content section__content--p30">

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">.
                        <canvas id="myChart" width="400" height="400"></canvas>
                        <h6 class="card-title text-center">Graficas de problemas de vehiculos</h6>
                        <p class="card-text text-center">Grafica de los problemas que se presentan en los distintos vehiculos que se atienden en los ultimos 7 meses  </p>

                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">.
                        <canvas id="myChart2" width="400" height="400"></canvas>
                        <h6 class="card-title text-center">Ganacias de los ultimos 7 meses </h6>
                        <p class="card-text text-center">Las ganacias mostradas son respecto a los distintos problemas que se tienen en los vehiculos </p>

                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">.
                        <canvas id="myChart3" width="400" height="400"></canvas>
                        <h6 class="card-title m-3 text-center">Cantidad de vehiculos de hombres y mujeres de los ultimos 7 meses </h6>
                        <p class="card-text text-center">Cantidad de veiculos atendidos de hombres y mujeres con diversas fallas en los ultimos 7 meses</p>

                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">.
                        <canvas id="myChart4" width="400" height="400"></canvas>
                        <h6 class="card-title m-3 text-center">Cantidad de vehiculos antendidos en los ultimos 7 mese</h6>
                        <p class="card-text text-center">Cantidad de veiculos atendidos con diversas fallas en los ultimos 7 meses</p>

                    </div>
                </div>
            </div>


            <div class="col-sm-12">
                <div class="card">

                </div>
            </div>

        </div>
        <!---->
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
include('plantilla/abajo.php');
include('plantilla/grafica.php');







?>