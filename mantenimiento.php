<?php
session_start();
include('plantilla/arriba.php');
include 'conexion/conexion.php';

$sql = "SELECT * FROM clientes";
$ejecutando = mysqli_query($conexion, $sql);
?>

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row m-t-50">
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-50">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>Propietario</th>
                                <th>Modelo</th>
                                <th>Placa</th>
                                <th>Marca</th>
                                <th>Color</th>
                                <th>Costo</th>
                                <th>Problema</th>
                                <th>Fecha de llegada</th>
                                <th>optiones</th>
                            </tr>
                        </thead>


                        <?php
                        echo "<tbody>";
                        while ($row = mysqli_fetch_array($ejecutando)) {
                            echo "<tr>";
                            echo "<input type="."hidden"." name=".$row['id'].">" ;
                            echo "<td>" . $row['nombre'] . " " . $row['apellido'] . "</td>";
                            echo "<td>" . $row['modelo'] . "</td>";
                            echo "<td>" . $row['placa'] . "</td>";
                            echo "<td>" . $row['vehículo'] . "</td>";
                            echo "<td>" . $row['color'] . "</td>";
                            echo "<td>" .   $row['costo'] . "</td>";
                            echo "<td>" . $row['problema'] . "</td>";
                            echo "<td>" . $row['fecha_llegada'] . "</td>";
                            echo "<td>" . "<a href='conexion/eliminar.php?id=" . $row['id'] . "'>eliminar</a>" ."<a href='conexion/print.php?id=" . $row['id'] . "'>imprimir</a>".  "</td>";
                            
                        }
                        echo "</tr>";
                        echo "</tbody>";
                        ?>


                    </table>
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>
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
?>