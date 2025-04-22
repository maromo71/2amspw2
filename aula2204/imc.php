<?php
function calcularImc($peso, $altura)
{
    $imc = $peso / ($altura * $altura);
    if ($imc < 18.5) {
        return "Abaixo do peso";
    } elseif ($imc < 25) {
        return "Peso normal";
    } elseif ($imc < 30) {
        return "Sobrepeso";
    } elseif ($imc < 35) {
        return "Obesidade Grau I";
    } elseif ($imc < 40) {
        return "Obesidade Grau II";
    } else {
        return "Obesidade Grau III";
    }
}
$peso = $_POST["textPeso"];
$altura = $_POST["textAltura"];
$resultado = calcularImc($peso, $altura);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="titulo">Resultado do IMC: </h1>
        <p>A classificação do IMC é: <?=$resultado?></p>
    </div>
</body>
</html>
