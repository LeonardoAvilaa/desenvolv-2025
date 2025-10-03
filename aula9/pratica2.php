<?php
$pastas =
    array(
        "bsn" =>
            array(
                "3a Fase" =>
                    array(
                        "desenvWeb",
                        "bancoDados 1",
                        "engSoft 1"
                    ),
                "4a Fase" =>
                    array(
                        "Intro Web",
                        "bancoDados 2",
                        "engSoft 2"
                    )
            )
    );

function listarPastas($pasta, $level = 0)
{
    if (is_array($pasta)) {
        foreach ($pasta as $key => $value) {
            if (is_array($value)) {
                echo str_repeat("-", $level) . $key . "<br>";
                listarPastas($value, $level + 1);
            } else {
                echo str_repeat("-", $level) . $value . "<br>";
            }
        }
    } else {
        echo $pasta . "<br>";
    }
}
listarPastas($pastas);
?>