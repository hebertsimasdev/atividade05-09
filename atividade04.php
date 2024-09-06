<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade03</title>
</head>

<body>
    <?php

    $numero1 = $_POST["n1"] ?? null;
    $numero2 = $_POST["n2"] ?? null;
    $numero3 = $_POST["n3"] ?? null;
    $numero4 = $_POST["n4"] ?? null;



    switch ($numero3) {
        case 1:
            echo "Soma: ";
            $n4 = $numero1 + $numero2;

            echo "resultado :$n4";
            break;

        case 2:
            echo "Subtração: ";
            $n4 = $numero1 - $numero2;

            echo "resultado :$n4";
            break;

        case 3:
            echo "Multiplicação: ";
            $n4 = $numero1 * $numero2;

            echo "resultado :$n4";
            break;

        case 4:
            echo "Divisão: ";
            $n4 = $numero1 / $numero2;

            echo "resultado :$n4";
            break;

            default:
            echo"Digite uma opção válida";
            break;
    }



    ?>

</body>

</html>