<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP</title>
</head>
<body>
    <<?php
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);//criar global para utilizar formato de moeda internacional
        $valor1 = $_GET['v1'] ?? 0;
        $salMin = 1_320.60;
    ?>
    <main>
        <h1>Informe sálario</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Salário (R$)</label>
        <input type="number" name="v1" id="v1" step="0.01" min="0" value="<?=$valor1?>">
        <p><strong>**Considerando salário mínimo de R$ 1.320,60</strong></p>
        <input type="submit" value="Calcular">

        <section id="resultado">
            <h2>Resultado</h2>
            <?php 
            $divisao = intdiv($valor1,$salMin);
            $resto = $valor1 % $salMin;

            echo "Quem recebe ". numfmt_format_currency($padrao, $valor1, "BRL")." recebe <strong>$divisao salários mínimos</strong> + ".numfmt_format_currency($padrao, $resto, "BRL");
            ?> 
        </section>
        </form>
    </main>
</body>
</html>