<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- calcular area do quadrado -->
    <h1>Calcular Area do Quadrado</h1>
    <form action="quadrado.php" method="get">
        <input type="number" name="lado" placeholder="lados">
        <input type="submit" value="calcular">
    </form>
    <?php
    if (isset($_GET["lado"])) {
        $lado = $_GET["lado"];
        echo "Área do quadrado lado " . $lado . " é: " . ($lado * $lado) . " Metros Quadrados";
    } else {
        echo "Preencha o valor!";
    }
    ?>
</body>

</html>