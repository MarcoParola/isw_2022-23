
<?php

require '../../utils/PdfGenerator.php';

class PdfController
{
    public static function pdf_handler($param)
    {
        PdfGenerator::generate_pdf($param);
    }
}

PdfController::pdf_handler($_POST);

?>
