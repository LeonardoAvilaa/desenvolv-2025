<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- somar tres valores recebidos via formulário -->
     <h1>Somar 3 Valores</h1>
    <form action="soma.php" method="get">
        <input type="number" name="n1" placeholder="Número 1">
        <input type="number" name="n2" placeholder="Número 2">
        <input type="number" name="n3" placeholder="Número 3">
        <input type="submit" value="Somar">
    </form>
    <?php
    if (isset($_GET["n1"]) && isset($_GET["n2"]) && isset($_GET["n3"])) {
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $n3 = $_GET["n3"];

        
        if ($n1 > 10) {
            $cor = "blue"; // se n1 > 10, mostrar resultado em azul
        } elseif ($n2 < $n3) {
            $cor = "green"; // se n2 < n3, mostrar resultado em verde
        } elseif ($n3 < $n1 && $n3 < $n2) {
            $cor = "red"; // se n3 < n1, mostrar resultado em vermelho
        } else {
            $cor = "black"; 
        }
        echo "<span style='color: $cor'>Resultado: $n1 + $n2 + $n3 = " . ($n1 + $n2 + $n3) . "</span>";
    } else {
        echo "Preencha os três valores!";
    }
    ?>
</body>

</html>