<?php
    //Definir a funcao para calcular o imc
    function calcularIMC($peso, $altura){
        $altura = $altura / 100;
        return $peso / ($altura * $altura);
    }
    function statusIMC($imc){
        if($imc < 18.5) return "Abaixo do peso.";
        if($imc < 25.0) return "Peso normal";
        if($imc < 30.0) return "Sobrepeso";
        if($imc < 35.0) return "Obesidade Grau I";
        if($imc < 40.0) return "Obesidade Grau II";
        return "Obesidade Mórbida";
    }
    $nome = $_POST["txtNome"];
    $peso = $_POST["numPeso"];
    $altura = $_POST["numAltura"];
    $imc = calcularIMC($peso, $altura);
    $resultado = statusIMC($imc);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Teste de Saúde</title>
</head>
<body>
    <h1>Resultado do Teste de IMC</h1>
    <h2>Dados Finais</h2>
    <p><strong>Nome: </strong> <?=$nome?> </p>
    <p><strong>Peso: </strong><?=$peso?> </p>
    <p><strong>Altura: </strong><?=$altura?></p>
    <hr>
    <h3>Resultado</h3>
    <p><strong>IMC calculado: </strong> <?=$imc?> </p>
    <p><strong>Status de saúde: </strong> <?=$resultado?> </p>
</body>
</html>