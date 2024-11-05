<?php

$salario1 = 1000;
$salario2 = 2000;

$salario2 = $salario1;

++$salario2;

$salario1 *= 1.1;

echo "Salário 1 = {$salario1}<br />Salário 2 = {$salario2}";