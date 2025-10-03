<?php
function calcularMedia($notas)
{
    $soma = array_sum($notas);
    $quantidade = count($notas);
    return $soma / $quantidade;
}

function statusNotas($status)
{
    if ($status >= 7) {
        return "Aprovado";
    } else {
        return "Reprovado por nota";
    }
}

function calcularFrequencia($faltas, $totalAulas)
{
    $totalFaltas = array_sum($faltas);
    $frequencia = (($totalAulas - $totalFaltas) / $totalAulas) * 100;
    return $frequencia;
}

function statusFrequencia($faltas, $totalAulas)
{
    $frequencia = calcularFrequencia($faltas, $totalAulas);
    if ($frequencia >= 70) {
        return "Aprovado";
    } else {
        return "Reprovado por frequência";
    }
}

?>