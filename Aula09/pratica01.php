<?php

$salarioBruto = 0;
$impostos     = 0;
$liquido      = 0;

function calculaFolhaPgto(&$bruto, &$imposto, &$liquido)
{
    $bruto = 10000;
    $imposto = 1000;
    $liquido = $bruto - $imposto;
}

calculaFolhaPgto($salarioBruto, $impostos, $liquido);

echo "Bruto: " .  $salarioBruto . "<br />Imposto: " . $impostos;