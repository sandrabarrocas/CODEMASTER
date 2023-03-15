<?php

$nome = "";
$idade = "";

if(isset($_GET["nome"])){
    $nome= $_GET["nome"];
}

if(isset($_GET["idade"])){

    $idade = $_GET["idade"];
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>

</head>

<body>

    <div id="teste">
        <h1><?php echo $nome . " | ".  $idade; ?></h1>
    </div>

    <div>
        <form>
            <input type="Text" name="nome" placeholder="Nome">
            <input type="number" min="0" name="idade" placeholder="Idade">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>  

</body>

</html>