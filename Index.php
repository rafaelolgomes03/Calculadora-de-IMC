<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content width="device-width", initial-scalle=1.0>
        <title>Cáuculo de IMC</title>
</head>
<header>
    <h1>Formulário</h1>
    <body>

    <form action="Index.php" method="GET">
        <label for="peso">Quanto pesa?</label>
        <input type="number" step="any" name="peso" id="peso" required>
        <label for="altura">Qual a sua altura?</label>
        <input type="number" step="any" name="altura" id="altura" required>
        <label for="idade">Qual sua idade?</label>
        <input type="number" name="idade" id="idade" required>
        <button type="submit" name="calcular">Calcular</button>
</form>

<?php
    $peso = (float)$_GET["peso"];
        $altura = (float)$_GET["altura"];
        $idade = (int)$_GET["idade"];
function calcular($peso, $altura){
    $imc = $peso / $altura ** 2;
    return $imc;
}
$imc = calcular($peso, $altura);
echo"O seu imc e:" . number_format($imc, 2);
if($imc<18.5){
    echo"Voce esta abaixo do peso";
}
else if($imc >= 18.5 && $imc<= 24.9){
    echo"Peso normal";
}
else if($imc >= 25.0 && $imc <= 29.9){
    echo"Voce esta acima do peso";
}
else{
    echo"Voce esta com obesidade";
}
if($idade >= 60){
    echo"Alerta: Pratique exercicios fisicos para ter uma vida mais saudavel";
}
?>
</body>
</html>