<?php

//Variaveis
$nome = "";
$peso = "";
$altura = "";
$imc = "";


//Verificacao
if(isset($_GET["nome"])){$nome = $_GET["nome"];}
if(isset($_GET["peso"])){$peso = floatval($_GET["peso"]);}
if(isset($_GET["altura"])){$altura = floatval($_GET["altura"]);}

if(isset($_GET["peso"]) && isset($_GET["altura"])){
    $imc = $peso / pow($altura, 2);
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <div>
        <h1>
            <?php
                if($imc != ""){
                    echo $nome . " | (IMC: " . round($imc, 1) . ")";
                }
            ?>    
        </h1>
        <form>
            <input type="text" name="nome" placeholder="Nome">
            <input type="number" name="peso" step="0.1" placeholder="Peso (kg)">
            <input type="number" name="altura" step="0.01" placeholder="Altura (m)">
            <br><br>
            <input type="submit" value="Calcular IMC">
        </form>
    </div>

</body>
</html>