<?php
$SALARIO1 = 1000;
$SALARIO2 = 2000;

$SALARIO2 = $SALARIO1;

$SALARIO2++;

$SALARIO1 *= 1.10;

echo "Valor Salário 1: " . number_format($SALARIO1, 2) . " e Valor Salário 2: " . number_format($SALARIO2, 2) . "<br>";

if ($SALARIO1 > $SALARIO2) {
    echo "O Valor da variável 1 é maior que o valor da variável 2.<br>";
} elseif ($SALARIO1 < $SALARIO2) {
    echo "O Valor da variável 1 é menor que o valor da variável 2.<br>";
} else {
    echo "Os valores são iguais.<br>";
}

for ($i = 1; $i <= 100; $i++) {
    $SALARIO1++;

    if ($i == 50) {
        break; 
    }
}

if ($SALARIO1 < $SALARIO2) {
    echo "O valor final de SALARIO1 é: " . number_format($SALARIO1, 2);
}
?>
