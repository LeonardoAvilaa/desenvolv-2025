<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feira do Joãozinho</title>
</head>
<body>
    <h1>Compra do Joãozinho na Feira</h1>
    <form action="feira.php" method="get">
        <h3>Informe o preço e a quantidade (Kg) de cada produto:</h3>

        <p>Maçã: <input type="number" step="0.01" name="preco_maca" placeholder="Preço (R$)"> 
        <input type="number" step="0.01" name="qtd_maca" placeholder="Kg"></p>

        <p>Melancia: <input type="number" step="0.01" name="preco_melancia" placeholder="Preço (R$)"> 
        <input type="number" step="0.01" name="qtd_melancia" placeholder="Kg"></p>

        <p>Laranja: <input type="number" step="0.01" name="preco_laranja" placeholder="Preço (R$)"> 
        <input type="number" step="0.01" name="qtd_laranja" placeholder="Kg"></p>

        <p>Repolho: <input type="number" step="0.01" name="preco_repolho" placeholder="Preço (R$)"> 
        <input type="number" step="0.01" name="qtd_repolho" placeholder="Kg"></p>

        <p>Cenoura: <input type="number" step="0.01" name="preco_cenoura" placeholder="Preço (R$)"> 
        <input type="number" step="0.01" name="qtd_cenoura" placeholder="Kg"></p>

        <p>Batata: <input type="number" step="0.01" name="preco_batata" placeholder="Preço (R$)"> 
        <input type="number" step="0.01" name="qtd_batata" placeholder="Kg"></p>

        <input type="submit" value="Calcular Total">
    </form>

    <?php
    if (
        isset($_GET["preco_maca"]) && isset($_GET["qtd_maca"]) &&
        isset($_GET["preco_melancia"]) && isset($_GET["qtd_melancia"]) &&
        isset($_GET["preco_laranja"]) && isset($_GET["qtd_laranja"]) &&
        isset($_GET["preco_repolho"]) && isset($_GET["qtd_repolho"]) &&
        isset($_GET["preco_cenoura"]) && isset($_GET["qtd_cenoura"]) &&
        isset($_GET["preco_batata"]) && isset($_GET["qtd_batata"])
    ) {
        // valores em reais e kg
        $maca = $_GET["preco_maca"] * $_GET["qtd_maca"];
        $melancia = $_GET["preco_melancia"] * $_GET["qtd_melancia"];
        $laranja = $_GET["preco_laranja"] * $_GET["qtd_laranja"];
        $repolho = $_GET["preco_repolho"] * $_GET["qtd_repolho"];
        $cenoura = $_GET["preco_cenoura"] * $_GET["qtd_cenoura"];
        $batata = $_GET["preco_batata"] * $_GET["qtd_batata"];

        $total = $maca + $melancia + $laranja + $repolho + $cenoura + $batata;
        $dinheiro = 50.00;

        echo "<h3>Resumo das compras:</h3>";
        echo "Maçã: R$ " . number_format($maca, 2, ',', '.') . "<br>";
        echo "Melancia: R$ " . number_format($melancia, 2, ',', '.') . "<br>";
        echo "Laranja: R$ " . number_format($laranja, 2, ',', '.') . "<br>";
        echo "Repolho: R$ " . number_format($repolho, 2, ',', '.') . "<br>";
        echo "Cenoura: R$ " . number_format($cenoura, 2, ',', '.') . "<br>";
        echo "Batata: R$ " . number_format($batata, 2, ',', '.') . "<br><br>";

        echo "<strong>Valor total da compra: R$ " . number_format($total, 2, ',', '.') . "</strong><br><br>";

        if ($total > $dinheiro) {
            $falta = $total - $dinheiro;
            echo "<p style='color:red;'>O valor da compra excedeu o disponível, faltaram R$ " . number_format($falta, 2, ',', '.') . ".</p>";
        } elseif ($total < $dinheiro) {
            $sobra = $dinheiro - $total;
            echo "<p style='color:blue;'>Joãozinho ainda pode gastar R$ " . number_format($sobra, 2, ',', '.') . ".</p>";
        } else {
            echo "<p style='color:green;'>O saldo foi esgotado exatamente, Joãozinho gastou os R$ 50,00.</p>";
        }
    }
    ?>
</body>
</html>
