<?php

require "../../../../../lib/fpdf184/fpdf.php";


class PdfGenerator
{
    public static function generate_pdf($param)
    {
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(40,10, $param['text']);
        $pdf->Output();
    }
}

?>