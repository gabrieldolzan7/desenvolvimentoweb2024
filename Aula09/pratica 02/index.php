<?php

require_once("funcoes.php");

$notas  = [10,8,9,7,5];
$faltas = [1,1,0,1,0,1,1,0,0,1];

$mediaFinal = calculaMedia($notas);
$frequencia = validaPresenca($faltas);
$aprovacao  = validaAprovacao($mediaFinal, $frequencia) ? "Aprovado" : "Reprovado";

$mensagem = "Média Aluno: {$mediaFinal}<br />
             Frequencia: {$frequencia}<br />
             Situação: {$aprovacao}<br />";

exibeMensagem($mensagem);