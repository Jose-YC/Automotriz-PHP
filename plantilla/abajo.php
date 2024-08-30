</div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    
    <script src="vendor/select2/select2.min.js">
    </script>

<script>
        function soloNumeros(e) {
            key = e.keyCode || e.which;
            teclado = String.fromCharCode(key);

            numero = "0123456789";
            especiales = "8-37-38-46";
            tecla_especial = false;
            for (var i in especiales) {
                if (key == especiales[i])
                    tecla_especial = true;
            }
            if (numero.indexOf(teclado) == -1 && !tecla_especial) {
                return false;
            }


        }

        function soloLetras(e) {

            var key = e.keyCode || e.which,
                tecla = String.fromCharCode(key).toLowerCase();

            letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",

                especiales = [8, 37, 39, 46],
                tecla_especial = false;

            for (var i in especiales) {
                if (key == especiales[i]) {
                    tecla_especial = true;
                    break;

                }
            }

            if (letras.indexOf(tecla) == -1 && !tecla_especial) {
                return false;
            }
        }
    </script>
    <!-- Main JS-->
    <script src="boostrap/js/main.js"></script>

</body>

</html>
<!-- end document-->