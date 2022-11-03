<?php 

class Calcolator
{
    public static function compute_operation($param)
    {
        $num1 = intval( $param['num1']);
        $num2 = intval( $param['num2']);
        $operation = $param['operation'];
        
        switch ($operation) {
            case '+':
                return self::sum($num1, $num2);
                break;
            case '-':
                return self::diff($num1, $num2);
                break;
            case '*':
                return self::multiplication($num1, $num2);
                break;
            case '/':
                return self::division($num1, $num2);
                break;
            default:
                return "unrecognized operation";
        }
    }

    private static function sum($num1, $num2)
    {
        return $num1 + $num2;
    }

    private static function diff($num1, $num2)
    {
        return $num1 - $num2;
    }

    private static function multiplication($num1, $num2)
    {
        return $num1 * $num2;
    }

    private static function division($num1, $num2)
    {
        return $num1 / $num2;
    }
}
?>