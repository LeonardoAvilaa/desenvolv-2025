<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financiamento da Mariazinha</title>
</head>

<body>
    <h1>Financiamento do Carro da Mariazinha</h1>

    <form action="financiamento.php" method="get">
        <p>Valor à vista (R$): <input type="number" step="0.01" name="valor_vista" placeholder="Ex: 22500.00"></p>
        <p>Quantidade de parcelas: <input type="number" name="parcelas" placeholder="Ex: 60"></p>
        <p>Valor de cada parcela (R$): <input type="number" step="0.01" name="valor_parcela" placeholder="Ex: 489.65"></p>
        <input type="submit" value="Calcular Juros">
    </form>

    <?php
    if (isset($_GET["valor_vista"]) && isset($_GET["parcelas"]) && isset($_GET["valor_parcela"])) {

        $valor_vista = $_GET["valor_vista"];
        $parcelas = $_GET["parcelas"];
        $valor_parcela = $_GET["valor_parcela"];

        // --- Tratamento de erros ---
        if (empty($valor_vista) || empty($parcelas) || empty($valor_parcela)) {
            echo "<p style='color:red;'>Preencha todos os campos.</p>";
        } elseif ($valor_vista <= 0) {
            echo "<p style='color:red;'>Valor à vista deve ser maior que zero.</p>";
        } elseif ($parcelas <= 0) {
            echo "<p style='color:red;'>A quantidade de parcelas deve ser maior que zero.</p>";
        } elseif ($valor_parcela <= 0) {
            echo "<p style='color:red;'>O valor da parcela deve ser maior que zero.</p>";
        } else {
            // --- Cálculos ---
            $valor_total = $parcelas * $valor_parcela;
            $juros = $valor_total - $valor_vista;

            echo "<h3>Resumo do Financiamento:</h3>";
            echo "Valor à vista: R$ " . number_format($valor_vista, 2, ',', '.') . "<br>";
            echo "Quantidade de parcelas: " . $parcelas . "<br>";
            echo "Valor de cada parcela: R$ " . number_format($valor_parcela, 2, ',', '.') . "<br>";
            echo "Valor total pago: R$ " . number_format($valor_total, 2, ',', '.') . "<br><br>";

            // Exibição colorida do resultado
            if ($juros > 0) {
                echo "<p style='color:red;'><strong>Mariazinha pagará R$ " . number_format($juros, 2, ',', '.') . " só de juros.</strong></p>";
            } else {
                echo "<p style='color:green;'><strong>Não há juros, o valor total é igual ao valor à vista.</strong></p>";
            }
        }
    }
    ?>
</body>

</html>
