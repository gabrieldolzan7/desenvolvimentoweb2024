<?php

$aMaterias    = [
    "Linguagens de programação e paradigmas",
    "Gestão de Projetos",
    "Administração e sistemas da informação",
    "Programação web I",
    "Arquitetura de computadores"
];

$aProfessores = [
    "Ademar",
    "Jullian",
    "Sandro",
    "Cleber",
    "Ademar",
];

for($i = 0; $i < count($aProfessores); $i++){
    echo "Matéria {$aMaterias[$i]} => Professor {$aProfessores[$i]}<br />";
}

