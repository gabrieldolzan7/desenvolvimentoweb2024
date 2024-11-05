<?php

try{
    $dbConnect = pg_connect("host=localhost
                            port=5432
                            dbname=postgres
                            user=postgres
                            password=postgres"); 


    $aPessoas = pg_query($dbConnect, "select * from tbpessoa");
        while($teste = pg_fetch_assoc($aPessoas)){
            echo "Nome: ". $teste['pesnome'] . "<br />";
        }
}catch(Exception $e){
    echo $e->getMessage();
}