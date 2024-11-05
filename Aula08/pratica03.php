<?php

$salario1 = 1000;
$salario2 = 2000;

$salario2 = $salario1;

++$salario2;

$salario1 *= 1.1;

if($salario1 > $salario2){
    echo "Salário 1 é maior que o salário 2";
} else if($salario2 > $salario1) {
    echo "Salário 2 maior que o salário 1";
} else {
    echo "Os salários são iguais";
}