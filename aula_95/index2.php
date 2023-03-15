<?php

$nome = "Fabricio";
$idade = 27;
$peso = 95.4;
$altura= 1.95;

$x = 0;

if(isset($_GET["numero"])){
    $x = intval($_GET["numero"]);
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>

    <div>
        <h1>Ficha do paciente: (<?= $nome; ?>)</h1>
        <h4>Idade: (<?= $idade; ?>)</h4>
        <h4>Peso: (<?= $peso; ?>)</h4>
        <h4>Altura: (<?= $altura; ?>)</h4>
        <hr>
        <h4>Dobro: (<?= $ax*2; ?>)</h4>
    </div> 
    
    <br><br>

    <div>
        <form>
            <input type="text" name="nome" placeholder="Nome">
            <input type="submit" value="Enviar">
        </form>
    </div>

    <br><br><hr><br><br>  

     <div>
        <form>
            <input type="number" name="numero" required="required">
            <input type="number" name="x">
            <input type="number" name="y" min="0" required="required">                        
            <input type="submit" value="Enviar">
        </form>
    </div>

    <br><br><hr><br><br>  

     <div>
        <form>
            <input type="number" name="numero" min="0" max="10" required="required">                 
            <input type="submit" value="Enviar">
        </form>
    </div>   

    <br><br><hr><br><br>  

     <div>
        <form>
            <input type="number" name="numero" required="required" placeholder="Idade" >
            <br><br>
            <input type="text" name="nome" minlength="3" minlength="5" required="required" placeholder="Nome">
            <br><br>           
            <input type="submit" value="Enviar">
        </form>
    </div>       

</body>
</html>