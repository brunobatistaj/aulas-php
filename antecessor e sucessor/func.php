<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resposta</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>

    <main>
        <?php 
            $n = $_GET["numero"];
            $antecessor = $n - 1;
            $sucessor = $n + 1;

            echo "<p>O número digito foi: $n</p>";
            echo "<p>O antecessor é <strong>$antecessor!</strong></p>";
            echo "<p>O sucessor é <strong>$sucessor!</strong></p>";
        ?>
        
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>