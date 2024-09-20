<?php
$SALARIO1 = 1000;
$SALARIO2 = 2000;

$SALARIO2 = $SALARIO1;

$SALARIO2++;

$SALARIO1 *= 1.10;

echo "O valor do Salário 1: " . number_format($SALARIO1, 2) . " e o valor do Salário 2: " . number_format($SALARIO2, 2);
?>
