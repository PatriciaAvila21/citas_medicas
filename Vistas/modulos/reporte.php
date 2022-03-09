<?php
require ('fpdf/fpdf.php');


//plantilla o pantallazo
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
     $this->Image('img/logo3.png',10,5,190,50,'png');
    // Arial bold 15
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(70);
    // Título
    $this->Cell(50,100,'Registros de Citas Medicas',0,0,'C');
    // Salto de línea
   /* $this->Ln(60);
    $this->Cell(20,10,'Fecha', 1, 0, 'C',0 );
    $this->Cell(30,10,'Hora', 1, 0, 'C',0 );
    $this->Cell(30,10,'Paciente', 1, 0, 'C',0 );
    $this->Cell(15,10,'Medico', 1, 0, 'C',0 );
    $this->Cell(30,10,'Especialidad', 1, 0, 'C',0 );
    $this->Cell(50,10,'Motivo de la consulta', 1, 1, 'C',0 );*/

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}



require 'cn.php';
$consulta = "SELECT * FROM cita";
$resultado = $conex->query($consulta);

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);


while($row = $resultado->fetch_assoc()){
    $pdf->Cell(20,10,$row['dates'], 1, 0, 'C',0 );
    $pdf->Cell(30,10,$row['hour'], 1, 0, 'C',0 );
    $pdf->Cell(30,10,$row['codpaci'], 1, 0, 'C',0 );
    $pdf->Cell(15,10,$row['coddoc'], 1, 0, 'C',0 );
    
    $pdf->Cell(30,10,$row['codespe'], 1, 0, 'C',0 );
    $pdf->Cell(50,10,$row['motivocit'], 1, 1, 'C',0 );
   
}
$pdf->Output();
?>