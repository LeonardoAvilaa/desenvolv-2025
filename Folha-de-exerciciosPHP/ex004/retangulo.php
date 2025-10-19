<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- calcular area do retangulo -->
    <h1>Calcular Area do retangulo</h1>
    <form action="retangulo.php" method="get">
        <input type="number" name="lado" placeholder="lado">
        <input type="number" name="base" placeholder="base">
        <input type="submit" value="calcular">
    </form>
    <?php
    if (isset($_GET["lado"]) && isset($_GET["base"])) {
        $lado = $_GET["lado"];
        $base = $_GET["base"];
        $calculo = $lado * $base;
        if ($calculo > 10) {
            echo "<h1>Área do retângulo lado " . $lado . " e base " . $base . " é: " . $calculo . " Metros Quadrados </h1>";
        } else {
            echo "<h3>Área do retângulo lado " . $lado . " e base " . $base . " é: " . $calculo . " Metros Quadrados </h3>";
        }
    }
    ?>
</body>

</html>