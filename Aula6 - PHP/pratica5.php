<?php
$disciplinas = [
    "Segunda-feira" => "Programação",
    "Terça-feira" => "PHP",
    "Quarta-feira" => "HTML",
    "Quinta-feira" => "CSS",
    "Sexta-feira" => "JS"
];

$professores = [
    "Segunda-feira" => "Prof. Cleber",
    "Terça-feira" => "Prof. Bastos",
    "Quarta-feira" => "Prof. Julian",
    "Quinta-feira" => "Prof. Manuela",
    "Sexta-feira" => "Prof. Sandro"
];

for ($i = 0; $i < 5; $i++) {
    $dia = array_keys($disciplinas)[$i]; 
    echo "Disciplina: " . $disciplinas[$dia] . ", professor: " . $professores[$dia] . ".<br>";
}
?>
