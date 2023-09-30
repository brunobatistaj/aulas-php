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
        $valor1 = $_GET['v1'] ?? 0;
    ?>
    <main>
        <h1>Raízes de um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Número</label>
        <input type="number" name="v1" id="v1" min="0" value="<?=$valor1?>">
        <input type="submit" value="Dividir">

        <section id="resultado">
            <h2>Dados de uma divisão</h2>
            
            <?php 
            $quad = sqrt($valor1);
            $cub = $valor1 ** (1/3);

                echo "<p>Raíz quadrada:" . number_format($quad,5,",",".")."</p>";
                echo "<p>Raíz cúbica:". number_format($cub,5,",",".")."</p>";
            ?>

        </section>
        </form>
    </main>
</body>
</html>