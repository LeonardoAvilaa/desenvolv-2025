<?php

    $value = $_REQUEST['valor'];
    $sale = $_REQUEST['desconto'];

    function calcularDesconto($value, $sale) {
        if ($sale < 0 || $sale > 100) {
            throw new Exception("Desconto inválido. Deve ser entre 0 e 100.");
        } 
        $valueDiscount = $value * ($value * $sale / 100);
        return $valueDiscount;
    }
    
    echo "Valor: $value <br>";
    echo "Desconto: $sale % <br>";
    echo "Valor com desconto: " . calcularDesconto($value, $sale);


?>