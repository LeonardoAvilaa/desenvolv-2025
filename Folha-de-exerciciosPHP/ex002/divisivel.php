<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- verificar divisao -->
     <h1>Verificar divisão</h1>
    <form action="divisivel.php" method="get">
        <input type="number" name="n1" placeholder="Número 1">
        <input type="submit" value="verificar">
    </form>
    <?php
    if (isset($_GET["n1"])) {
        $n1 = $_GET["n1"];
        if ($n1 % 2 == 0) {
            echo "Valor divisível por 2";
        } else {
            echo "Valor não é divisível por 2";
        }
    }
    ?>
</body>

</html>