<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade05</title>

</head>
<body>
    <?php
$nome = $_POST["nome"];
$numero1 = $_POST["n1"];

if($nome=="admin" && $numero1==1234){
    echo"LOGIN BEM-SUCEDIDO"; 

}elseif($nome !== "admin" || $numero1 !== 1234){
    echo"LOGIN INCORRETO";
}
    
    ?>
    
</body>
</html>