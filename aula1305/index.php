<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Saúde</title>
</head>
<body>
    <h1>Cálculo de IMC</h1>
    <form action="receba.php" method="post">
        <label for="txtNome">Nome do Paciente: </label><br>
        <input type="text" name="txtNome" id="txtNome" required><br><br>

        <label for="numPeso">Peso: </label><br>
        <input type="number" name="numPeso" id="numPeso" 
            step="0.5" min="0" max="250"><br><br>

        <label for="numAltura">Altura: </label><br>
        <input type="number" name="numAltura" id="numAltura"
            step="0.1" min="50" max="250"><br><br>

        <input type="submit" value="Calcular">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>