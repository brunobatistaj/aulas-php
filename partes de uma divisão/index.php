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
        //capturando dados do formulario
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 1;
    ?>
    <main>
        <h1>Divisão de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Dividendo</label>
        <input type="number" name="v1" id="v1" min="0" value="<?=$valor1?>">
        <label for="v2">Divisor</label>
        <input type="number" name="v2" id="v2" min="1" value="<?=$valor2?>">
        <input type="submit" value="Dividir">

        <section id="resultado">
            <h2>Dados de uma divisão</h2>
            <?php 
            $resto = $valor1 % $valor2;
            $divisao = intdiv($valor1,$valor2);
            ?>

            <table class="divisao">
                <tr>
                    <td><?=$valor1?></td>
                    <td><?=$valor2?></td>
                </tr>
                <tr>
                    <td><?=$resto?></td>
                    <td><?=$divisao?></td>
                </tr>
            </table>
            
        </section>
        </form>
    </main>
</body>
</html>