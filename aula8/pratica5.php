<?php
$disciplinas = array("Programação Web", "Banco de Dados II", "Administração e Sistemas de Informação", "Estrutura de Dados II", "Engenharia de Software II");
$professores = array("Cleber", "Marco", "Marciel", "Fernando", "Jullian");

for ($i = 0; $i < count($disciplinas); $i++) {
    echo "A disciplina " . $disciplinas[$i] . " é ministrada pelo professor " . $professores[$i] . "<br>";
}

echo '<br>';

$DiciplinasEProfessores = array(array("Disciplina" => "Programação Web", "Professor" => "Cleber"),
                               array("Disciplina" => "Banco de Dados II", "Professor" => "Marco"),
                               array("Disciplina" => "Administração e Sistemas de Informação", "Professor" => "Marciel"),
                               array("Disciplina" => "Estrutura de Dados II", "Professor" => "Fernando"),
                               array("Disciplina" => "Engenharia de Software II", "Professor" => "Jullian"));
                               
foreach ($DiciplinasEProfessores as $Chave => $Valor) {
    echo "A disciplina " . $Valor['Disciplina'] . " é ministrada pelo professor " . $Valor['Professor'] . "<br>";
}
?>