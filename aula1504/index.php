<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Triângulo</title>
</head>

<body>
    <h1>Verificar Triângulo e Tipo</h1>
    <form method="post" action="triangulo.php">
        <label for="lado1">Lado 1: </label>
        <input type="text" name="lado1" id="lado1" required><br><br>
        
        <label for="lado2">Lado 2: </label>
        <input type="text" name="lado2" id="lado2" required><br><br>
        
        <label for="lado3">Lado 3: </label>
        <input type="text" name="lado3" id="lado3" required><br><br>
        <input type="submit" value="Verificar">
    </form>
</body>

</html>