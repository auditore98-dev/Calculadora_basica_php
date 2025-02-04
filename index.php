<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="number">Number 1:</label>
        <input type="number" name="number" min="0" max="900">
        <label for="number">Number 2:</label>
        <input type="number" name="number2" min="0" max="900">
        <label for="operacion"></label>
        <select name="operaciones" id="operator">
            <option value="+" selected>Suma</option>
            <option value="-">Resta</option>
            <option value="*">multiplicacion</option>
            <option value="/">division</option>
        </select>
        <input type="submit" value="Calcular">
    </form>

    <?php
    error_reporting(0);
    // var_dump($_SERVER);
    
    function sumar($n1 = 0, $n2 = 0): int
    {
        return $n1 + $n2;
    }

    function restar($n1 = 0, $n2 = 0): int
    {
        return $n1 - $n2;
    }

    function multiplicar($n1 = 0, $n2 = 0): int
    {
        return $n1 * $n2;
    }

    function dividir($n1 = 0, $n2 = 0): float
    {
        if($n2==0){
            echo "<h1>No puedes dividir un numero entre cero</h1>";
            
        }
        return $n1 / $n2;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        var_dump($_SERVER["REQUEST_METHOD"]);
        $n1 = (int) $_POST["number"];
        $n2 = (int) $_POST["number2"];
        $operation = $_POST["operaciones"];
        var_dump($n1,$n2,$operation) ;

        if (isset($n1) && isset($n2) && isset($operation)) {
            if ($n1 != "" && $n2 != "" && $operation != "") {
                switch ($operation) {
                    case '+':
                        echo "<h1>Resultado: ";
                        echo sumar($n1, $n2);
                        echo "</h1>";
                        break;
                    case '-':
                        echo "<h1>Resultado: ";
                        echo restar($n1, $n2);
                        echo "</h1>";
                        break;
                    case '*':
                        echo "<h1>Resultado: ";
                        echo multiplicar($n1, $n2);
                        echo "</h1>";
                        break;
                    case '/':
                        echo "<h1>Resultado: ";
                        echo dividir($n1, $n2);
                        echo "</h1>";
                        break;
                }
            }else{
                echo "<h1>Por favor coloca los numeros para la operacion</h1>";
            }

        }
    }
    ?>

</body>

</html>