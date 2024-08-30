<?php
include 'conexion.php';

require('../reportePDF/fpdf.php');
session_start();

$id = $_GET['id'];

// $conexion->query($sql1);
// $idoinsert = $conexion->insert_id;
$dato = "SELECT * FROM clientes where id =$id";
$result = mysqli_query($conexion, $dato);
define('EURO', chr(128)); // Constante con el símbolo Euro.
        
        $pdf = new FPDF();
        $pdf->AddPage();
        // CABECERA
        $pdf->SetFont('Helvetica', '', 30);
        $pdf->Cell(200, 4, 'TU-TALLER.com', 0, 1, 'C');
        $pdf->SetFont('Helvetica', '', 8);
        $pdf->Cell(60, 4, ' ', 0, 1, 'C');
        $pdf->Cell(60, 4, '', 0, 1, 'C');
        $pdf->Cell(60, 4, '', 0, 1, 'C');
        // DATOS FACTURA        
        $pdf->Ln(5);
        $pdf->SetFont('Helvetica', '', 20);
        $pdf->Ln(5);


        while ($row = mysqli_fetch_array($result)) {

            $pdf->Ln(5);
            $pdf->Cell(60, 4, 'Fecha:'.$row['fecha_llegada'], 0, 1, ''); //aqui va la fecha de 
            
            $pdf->Ln(5);
            $pdf->Cell(60, 4, 'Metodo de pago: Tarjeta', 0, 1, ''); //se queda 
            $pdf->Ln(5);
      
            // while ($row1 = mysqli_fetch_array($ejecutando)) {
            //     $pdf->Cell(30, 4,  $row1['nombre'], 0);
            // }
            $pdf->Cell(30, 4, 'Empleado:', 0);
            $pdf->Cell(30, 4, $_SESSION['usuario'],  0, 0, 'R'); 
            $pdf->Ln(10);
            $pdf->Cell(30, 4, 'Cliente:', 0);
            $pdf->Cell(35, 4, $row['nombre'] . $row['apellido'],  0, 0, 'R'); //aqui va el nombre del cliente
            $pdf->Ln(5);
            $pdf->Ln(5);
            $pdf->Ln(0);
            $pdf->SetFont('Helvetica', '', 20);
            
            $pdf->Ln(5);
            $pdf->Ln(10);
            // COLUMNAS
            $pdf->SetFont('Helvetica', '', 20);
            $pdf->Cell(30, 10, 'Problema', 0);
            $pdf->Cell(70, 10, 'Veiculo', 0, 0, 'R');
            $pdf->Cell(70, 10, 'Total', 0, 0, 'R');
            $pdf->Ln(8);
            $pdf->Cell(170, 0, '', 'T');
            $pdf->Ln(0);
            // PRODUCTOS
            $pdf->SetFont('Helvetica', '', 20);
            $pdf->MultiCell(30, 15,  $row['problema'], 0, 'L');
            $pdf->Cell(95, -14, $row['vehículo'], 0,0, 'R');
            $pdf->Cell(75, -14,  $row['costo'], 0,0,  'R');
            $pdf->Ln(2);
            
            //SUMATORIO DE LOS PRODUCTOS Y EL IVA 
            $pdf->Ln(6);
            $pdf->Cell(170, 0, '', 'T');
            $pdf->Ln(2);
            $pdf->Cell(25, 10, 'TOTAL SIN I.V.A.', 0);
            $pdf->Cell(95, 10, '', 0,0, 'R');
            $pdf->Cell(50, 10, $row['costo'], 0, 0, 'R');
            $pdf->Ln(10);
            $pdf->Cell(25, 10, 'I.V.A. 21%', 0);
            $pdf->Cell(95, 10, '', 0, 0, 'R');
            $pdf->Cell(60, 10,  $row['costo'].'*(21/100)', 0, 0, 'R');
            $pdf->Ln(10);
            $pdf->Cell(25, 10, 'TOTAL', 0);
            $pdf->Cell(95, 10, '', 0, 0, 'R');
            $pdf->Cell(60, 10, 'el mismo del igv', 0, 0, 'R');
            $pdf->Ln(10);
            $pdf->Ln(15);
            // PIE DE PAGINA $pdf->Ln(10); 
            $pdf->SetFont('Helvetica', '', 16);
            $pdf->Cell(170, 0, 'EL PERIODO DE DEVOLUCIONES', 0, 1, 'C');
            $pdf->Ln(10);
            $pdf->Cell(180, 0,utf8_decode('CADUCA 30 DÍAS DESPUES DE LA FECHA:'.$row['fecha_llegada']), 0, 1, 'C');
        }
        $pdf->Output();
        