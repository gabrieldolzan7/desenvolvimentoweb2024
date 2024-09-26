<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .azul {color: blue;}
        .verde {color: green;}
        .vermelho {color: red;}
    </style>
</head>
<body>
    <h1>Soma dos três valores</h1>
    <form method="post">
        <label for="valor1">Primeiro Valor: </label>
        <input type="number" name= "valor1" required>
        <br>
        <label for="valor2">Segundo Valor: </label>
        <input type="number" name= "valor2" required>
        <br>
        <label for="valor3">Terceiro Valor: </label>
        <input type="number" name= "valor3" required>
        <br>
        <input type="Subimit" value="Calcular" >
    </form>

    <?php
    function calcularsoma($v1, $v2, $v3, $soma){
        if ($v1 > 10) {
            return "<span class= 'azul'>$soma</span>"
        } elseif ($v2 < $v3) {
            return "<span class= 'verde'> $soma</span>"
        } elseif ($v3 < $v1 && $v3 < $v2) {
            return "<span class= 'vermelho'>$soma</span>"
        }
        return $soma;
    }

    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        $valor1 = (int)$_POST['valor1'];
        $valor2 = (int)$_POST['valor2'];
        $valor3 = (int)$_POST['valor3'];

        $soma = calcularsoma($valor1, $valor2, $valor3);
        $resultadoCor = determinaCor($valor1, $valor2, $valor3, $soma);

        echo "<h2> Resultado da soma: $resultadoCor</h2>";
    }
    ?>
</body>
</html>