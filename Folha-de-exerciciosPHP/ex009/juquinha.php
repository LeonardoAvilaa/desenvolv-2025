<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financiamento da Moto do Juquinha</title>
</head>

<body>
    <h1>Financiamento da Moto do Juquinha (Juros Compostos)</h1>

    <form action="juquinha.php" method="get">
        <p>Valor à vista da moto (R$): 
            <input type="number" step="0.01" name="valor_vista" placeholder="Ex: 8654.00">
        </p>
        <input type="submit" value="Calcular Parcelas">
    </form>

    <?php
    if (isset($_GET["valor_vista"])) {
        $valor_vista = $_GET["valor_vista"];

        if (empty($valor_vista)) {
            echo "<p style='color:red;'> informe o valor à vista da moto.</p>";
        } elseif ($valor_vista <= 0) {
            echo "<p style='color:red;'> valor à vista deve ser maior que zero.</p>";
        } else {
            echo "<h3>Opções de financiamento com juros compostos:</h3>";

            //dados base
            $taxa_inicial = 2.0; // 2% ao mês
            $parcelas_opcoes = [24, 36, 48, 60];

            foreach ($parcelas_opcoes as $indice => $n_parcelas) {
                //aumenta 0,3% a cada opção
                $taxa = $taxa_inicial + (0.3 * $indice);
                $i = $taxa / 100; // transforma em decimal

                //M = C * (1 + i)^t
                $montante = $valor_vista * pow((1 + $i), $n_parcelas);
                $valor_parcela = $montante / $n_parcelas;
                $juros_total = $montante - $valor_vista;

                echo "<p>";
                echo "<strong>$n_parcelas vezes:</strong><br>";
                echo "Taxa de juros: " . number_format($taxa, 1, ',', '.') . "% ao mês<br>";
                echo "Valor total com juros: R$ " . number_format($montante, 2, ',', '.') . "<br>";
                echo "Valor de cada parcela: R$ " . number_format($valor_parcela, 2, ',', '.') . "<br>";
                echo "Total de juros pagos: R$ " . number_format($juros_total, 2, ',', '.') . "<br>";
                echo "</p><hr>";
            }
        }
    }
    ?>
</body>

</html>
