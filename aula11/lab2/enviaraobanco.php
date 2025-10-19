<?php
try {
    $connectionString = "host=localhost 
                         port=5432 
                         dbname=local 
                         user=postgres 
                         password=postgres";

    $connection = pg_connect($connectionString);
    if ($connection) {
        echo "conexao estabelecida com sucesso";
        $data = [
            'pesnome' => $_POST['nome'],
            'pessobrenome' => $_POST['sobrenome'],
            'pesemail' => $_POST['email'],
            'pespassword' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'pescidade' => $_POST['cidade'],
            'pesestado' => $_POST['estado'],
        ];

        $query = "INSERT INTO tbpessoa (pesnome, pessobrenome, pesemail, pespassword, pescidade, pesestado) 
                  VALUES ($1, $2, $3, $4, $5, $6)";
        $result = pg_query_params($connection, $query, $data);

        if ($result) {
            echo "Dados inseridos com sucesso.";
        } else {
            echo "Erro ao inserir dados.";
        }

        pg_close($connection);
    } else {
        echo "Erro ao conectar ao banco de dados.";
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
?>