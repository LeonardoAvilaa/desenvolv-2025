<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra da Moto do Paulinho</title>
</head>

<body>
    <h1>Financiamento da Moto do Paulinho</h1>

    <form action="moto.php" method="get">
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
            echo "<p style='color:red;'> alor à vista deve ser maior que zero.</p>";
        } else {
            echo "<h3>Opções de financiamento com juros simples:</h3>";

            //dados base
            $taxa_inicial = 1.5; // ao mes
            $parcelas_opcoes = [24, 36, 48, 60];

            foreach ($parcelas_opcoes as $indice => $n_parcelas) {
                //taxa aumenta 0,5% a cada opção
                $taxa = $taxa_inicial + (0.5 * $indice);
                $juros_total = $valor_vista * ($taxa / 100) * $n_parcelas;
                $valor_total = $valor_vista + $juros_total;
                $valor_parcela = $valor_total / $n_parcelas;

                echo "<p>";
                echo "<strong>$n_parcelas vezes:</strong><br>";
                echo "Taxa de juros: " . number_format($taxa, 1, ',', '.') . "% ao mês<br>";
                echo "Valor total com juros: R$ " . number_format($valor_total, 2, ',', '.') . "<br>";
                echo "Valor de cada parcela: R$ " . number_format($valor_parcela, 2, ',', '.') . "<br>";
                echo "Total de juros pagos: R$ " . number_format($juros_total, 2, ',', '.') . "<br>";
                echo "</p><hr>";
            }
        }
    }
    ?>
</body>

</html>
