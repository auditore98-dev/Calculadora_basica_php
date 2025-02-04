<?php
error_reporting(0);
// var_dump($_SERVER);


class Calculadora
{
    public function sumar($n1 = 0, $n2 = 0): int
    {
        return $n1 + $n2;
    }

    public function restar($n1 = 0, $n2 = 0): int
    {
        return $n1 - $n2;
    }

    public function multiplicar($n1 = 0, $n2 = 0): int
    {
        return $n1 * $n2;
    }

    public function dividir($n1 = 0, $n2 = 0): float
    {
        if ($n2 == 0) {
            throw new Exception("No puedes dividir un numero entre cero") ;
        }
        return $n1 / $n2;
    }
}
?>