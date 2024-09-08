<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade06</title>
</head>
<body>
    <?php
    
$valor=$_POST["n1"];
$dinheiro='0';

if ($valor=='1') {
    echo"Seu saldo é de $dinheiro";
    
}elseif ($valor=='2') {
    echo"INFORME O VALOR A SER SACADO";
    

}elseif ($valor=='3') {
    echo"INFORME O VALOR A SER DEPOSITADO";

}
elseif ($valor=='4') {
    echo"Até logo...";
}
else {
echo"Digite uma opção válida";}
    ?>
</body>
</html>
