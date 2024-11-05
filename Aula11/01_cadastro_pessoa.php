<?php

try{
    $dbConnect = pg_connect("host=localhost
                            port=5432
                            dbname=postgres
                            user=postgres
                            password=postgres"); 

    if($dbConnect){
        $aDados = [$_POST['campo_primeiro_nome'],
                   $_POST['campo_sobrenome'],
                   $_POST['campo_email'],
                   $_POST['campo_password'],
                   $_POST['campo_cidade'],
                   $_POST['campo_estado']];

    }


    $result = pg_query_params($dbConnect, "insert into tbpessoa
                                          (pesnome, pessobrenome, pesemail, pespassword, pescidade, pesestado)
                                          values 
                                          ($1, $2, $3, $4, $5, $6)", $aDados);

    echo "Dados Salvos com sucesso!!!";

} catch(Exception $e){
    $e->getMessage();
}


