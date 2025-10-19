<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- calcular area do triangulo -->
    <h1>Calcular Area do triangulo</h1>
    <form action="triangulo.php" method="get">
        <input type="number" name="altura" placeholder="altura">
        <input type="number" name="base" placeholder="base">
        <input type="submit" value="calcular">
    </form>
   <?php
if (isset($_GET["altura"]) && isset($_GET["base"])) {
    $altura = $_GET["altura"];
    $base = $_GET["base"];
    $calculo = ($base * $altura) / 2;
    if (isset($_GET["altura"]) && isset($_GET["base"])) {
        echo "Área do triângulo, altura " . $altura . " e base " . $base . " é: " . $calculo . " Metros Quadrados ";
    } else {
        echo "preencha os valores!";
    }
}
?>
</body>

</html>