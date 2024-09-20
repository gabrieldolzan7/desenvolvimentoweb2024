<?php
$dados = [
    ["Disciplina" => "Matemática", "Faltas" => 5, "Média" => 8.5],
    ["Disciplina" => "Português", "Faltas" => 2, "Média" => 9],
    ["Disciplina" => "Geografia", "Faltas" => 10, "Média" => 6],
    ["Disciplina" => "Educação Física", "Faltas" => 2, "Média" => 8],
];

echo "<table border='1' cellpadding='10'>";
echo "<tr>
        <th>Disciplina</th>
        <th>Faltas</th>
        <th>Média</th>
      </tr>";

foreach ($dados as $linha) {
    echo "<tr>
            <td>" . $linha["Disciplina"] . "</td>
            <td>" . $linha["Faltas"] . "</td>
            <td>" . number_format($linha["Média"], 1) . "</td>
          </tr>";
}

echo "</table>";
?>
