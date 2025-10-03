<?php
require_once "funcoes.php";

$notas = array(8, 7, 9, 6, 5, 10);
$faltas = array(1, 0, 1, 1, 0, 0);

echo "<h2>Boletim do Aluno</h2>";

echo "Média: " . calcularMedia($notas) . " - " . statusNotas(calcularMedia($notas)) . "<br>";
echo "Frequência: " . calcularFrequencia($faltas, 6) . "% - " . statusFrequencia($faltas, 6);

?>