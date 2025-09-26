<?php
$salario1 = 1000;
$salario2 = 2000;

$salario2 = $salario1;
++$salario2;
$salario1 *= 1.1;

echo "Salario 1: $salario1, Salario 2: $salario2";

for ($i = 0; $i < 100; $i++) {
    $salario1++;
    if ($i == 50) {
        break;
    }
}

echo '<br>';

if ($salario1 < $salario2) {
    echo "O valor da variável 1 é menor que o valor da variável 2";
} elseif ($salario1 == $salario2) {
    echo "Os valores são iguais";
} else {
    echo "o valor do Salario 1: $salario1 é maior que o valor do Salario 2:$salario2";
}

echo '<br>';

$idade = array("João" => 35, "Maria" => 37, "José" => 43);
foreach ($idade as $chave => $valor) {
    echo "Chave = " . $chave . ", Valor = " . $valor;
    echo "<br>";
}

?>