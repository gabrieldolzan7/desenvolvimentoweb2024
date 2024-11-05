<?php

function calculaMedia(array $notas): float
{
    $media = 0;

    foreach ($notas as $nota) {
        $media = $nota + $media;
    }

    $media = $media / count($notas);

    return $media;
}

function validaAprovacao(int $nota, int $presenca): bool
{
    if($nota > 7 && $presenca > 70){
        return true;
    }

    return false;
}

function validaPresenca(array $presencas): int
{
    $falta = 100;

    foreach($presencas as $presenca){
        if($presenca == 0){
            $falta = $falta - 10;
        }
    }

    return $falta;
}

function exibeMensagem(string $mensagem): void
{
    echo $mensagem;
}