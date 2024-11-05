<?php

try{
    $dbConect = pg_connect("host=localhost
                            port=5432
                            dbname=postgres
                            user=postgres
                            password=postgres");

    if($dbConect){
        echo "Banco Conectado";
    }

    $result = pg_query($dbConect, "select count(*) as qtdtabs from pg_tables");

    while($row = pg_fetch_assoc($result)){
        echo "<br>Result: ".$row['qtdtabs'];
    }

}catch(Exception $exception){
    echo $exception->getMessage();
}