<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 8</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <table border="1">
        <tr>
            <?php
            $boletim = array(
                array("Disciplina" => "Matemática", "Faltas" => "5", "Média" => "8.5"),
                array("Disciplina" => "Português", "Faltas" => "2", "Média" => "9.0"),
                array("Disciplina" => "Geografia", "Faltas" => "10", "Média" => "6.0"),
                array("Disciplina" => "Educação Física", "Faltas" => "2", "Média" => "8.0"),
            );

            echo "<table>
        <tr>
            <th>Disciplina</th>
            <th>Faltas</th>
            <th>Média</th>
        </tr>";

            foreach ($boletim as $Chave => $Valor) {
                echo "<tr>
            <td>" . $Valor['Disciplina'] . "</td>
            <td>" . $Valor['Faltas'] . "</td>
            <td>" . $Valor['Média'] . "</td>
          </tr>";
            }
            echo "</table>";
            ?>
        </tr>
    </table>
</body>