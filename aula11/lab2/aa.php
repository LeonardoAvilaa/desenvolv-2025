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
        
        $result = pg_query($connection, "SELECT COUNT (*) FROM tbpessoa");

        if ($result) {  
            $row = pg_fetch_row($result);
            echo "Total de registros na tabela tbpessoa: " . $row[0];
        } else {
            echo "Erro ao executar a consulta.";
        }

        $data = [
            'pesnome' => 'John',
            'pessobrenome' => 'Sql',
            'pesemail' => 'Gj0kZ@example.com',
            'pespassword' => password_hash('123456', PASSWORD_DEFAULT),
            'pescidade' => 'New York',
            'pesestado' => 'NY',
        ];

        $resultInsert = pg_query_params(
            $connection,
            "INSERT INTO TBPESSOA (
                            pesnome,
                            pessobrenome,
                            pesemail,
                            pespassword,
                            pescidade,
                            pesestado
                        )
        VALUES ($1, $2, $3, $4, $5, $6)",
            array_values($data)
        );
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
            
        throw new Exception("falha na conexao com o banco de dados");
}
?>