<?php 

require '../../utils/Calcolator.php';

class OperationController
{
    public static function calculator_handler($param)
    {
        $rerult = Calcolator::compute_operation($param);
        header("Location: ../views/computationDone.php?result=".$rerult);
    }
}

OperationController::calculator_handler($_POST);
?>