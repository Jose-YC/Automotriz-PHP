<?php
include 'conexion/conexion.php';
session_start();
include('plantilla/arriba.php');
$sql = "SELECT * FROM problemas";
$ejecutando = mysqli_query($conexion, $sql);
?>

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Basic Form</strong> Elements
                    </div>
                    <div class="card-body card-block">
                        <form action="conexion/registrarcliente.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Empleado</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <strong class="form-control-static" style="text-transform: uppercase;">
                                        <?php
                                        if (isset($_SESSION['usuario']))
                                            echo `<p>` . $_SESSION['usuario'] . `</p>`;
                                        ?>
                                    </strong>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <strong>Datos Del Cliente</strong>
                                </div>
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">DNI

                                            </label>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <input type="text" id="text-input" name="dni" placeholder="DNI del Cliente"  onkeypress="return soloNumeros(event)" class="form-control">
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Cliente

                                            </label>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <input type="text" id="text-input" name="nombre" onkeypress="return soloLetras(event)" placeholder="Nombre del Cliente" class="form-control">
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <input type="text" id="text-input" name="apellido" onkeypress="return soloLetras(event)"placeholder="Apellidos del Cliente" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Correo del Cliente</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="email" id="email-input" name="correo" placeholder="Correo del Cliente" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Numero

                                            </label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="telefono"  onkeypress="return soloNumeros(event)" placeholder="Telefono del Cliente" class="form-control">
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <strong>Datos Del Veiculo Del Cliente</strong>
                                </div>
                                <div class="card-body card-block">

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Placa

                                            </label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="placa" placeholder="Placa del veiculo" class="form-control">
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Modelo

                                            </label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="modelo" placeholder="Modelo del veiculo" class="form-control">
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Marca

                                            </label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="marca" placeholder="Marca del veiculo" onkeypress="return soloLetras(event)" class="form-control">
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Color

                                            </label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="color" onkeypress="return soloLetras(event)" placeholder="Color del veiculo" class="form-control">
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Costo

                                            </label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="costo" placeholder="Costo de la reparacion"  onkeypress="return soloNumeros(event)" class="form-control">
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">Problema del veiculo</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="problema" id="select" style="text-transform: uppercase;" class="form-control">
                                                <?php
                                                while ($row = mysqli_fetch_array($ejecutando)) {
                                                    echo "<option  value=" . $row['nombre'] . ">" . $row['nombre'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="textarea-input" class=" form-control-label">Especificacion Del problema</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="especificoproblema" id="textarea-input" rows="9" placeholder="Problemas" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Fecha de ingreso

                                            </label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="date" id="text-input" name="fecha" placeholder="Placa del veiculo" class="form-control">
                                        </div>

                                    </div>


                                </div>


                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Guardar
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                    </form>

                </div>

            </div>
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
<?php
include('plantilla/abajo.php');
?>
