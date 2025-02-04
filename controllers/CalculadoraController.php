<?php
require_once "../models/Calculadora.php";
class CalculadoraController{

    public static function run(){
        $controller=new self();
        $controller->handleRequest();
    }
    public function handleRequest(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // var_dump($_SERVER["REQUEST_METHOD"]);
                $n1 = (int) $_POST["number"];
                $n2 = (int) $_POST["number2"];
                $operation = $_POST["operaciones"];
                $calculadora=new Calculadora();
                
                try{
                    $resultado=$this->calcular($calculadora,$n1,$n2,$operation);
                    echo json_encode(["resultado"=>$resultado]);
                }catch(Exception $e){
                    echo json_encode(["error"=>$e->getMessage()]);
                }
                
            }
    }

    public function calcular($calculadora,$n1,$n2,$operation){
        // var_dump($n1,$n2,$operation) ;
        if (isset($n1) && isset($n2) && isset($operation)) {
            if ($n1 != "" && $n2 != "" && $operation != "") {
                switch ($operation) {
                    case '+':
                       return $calculadora->sumar($n1,$n2);
                    case '-':
                        return $calculadora->restar($n1,$n2);
                    case '*':
                        return $calculadora->multiplicar($n1,$n2);
                    case '/':
                        return $calculadora->dividir($n1,$n2);
                    default:
                    return "Operacion no valida";
                }
            }
        }
    }
}






?>