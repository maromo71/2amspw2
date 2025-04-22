<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do IMC da Pessoa: </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="titulo">Cálculo do IMC: </h1>
    </div>
    <div class="container">
        <form class="form-control" action="imc.php" method="POST">
           <label  for="textPeso">Seu peso: </label>
           <input class="form-control" type="text" name="textPeso" id="textPeso" required >

           <label for="textAltura">Sua altura: </label>
           <input class="form-control" name="textAltura" id="textAltura" required>

           <input class="btn btn-success mt-3" type="submit" value="Calcular IMC">
        </form>
    </div>
</body>
</html>