
<?php

require "../../lib/fpdf184/fpdf.php";


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10, $_POST['text']);
$pdf->Output();

?>
