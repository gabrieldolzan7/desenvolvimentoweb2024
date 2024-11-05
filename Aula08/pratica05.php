<?php

$iSalario1 = 0;
$iSalario2 = 0;

for($i = 0; $i <= 100; $i++){
    $iSalario1 = $iSalario1 + 1;

    if($i == 49){
        break;
    }
}

if($iSalario1 > $iSalario2){
    echo "O valor do salário 1 é igual a {$iSalario1}";
}   