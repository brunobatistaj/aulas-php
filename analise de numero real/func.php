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
            $n = $_GET["numero"] ?? 0;
            $inteiro = (int) $n;//pega inteiro de num
            $real = $n-$inteiro;//pega flutuante de num


            echo "<p>Analisando o número ". number_format($n, 3, ",",".")." informado</p>";
            echo "<ul><li>Inteiro do número é <strong>". number_format($inteiro, 0, ",", ".") ."</strong></li>";
            echo "<li>Frácionario do número é <strong>". number_format($real, 3, ",", ".") ."</strong></li></ul>";
        ?>
        
        <button onclick="javascript:history.go(-1)">
        Voltar para a página anterior</button>
    </main>
</body>
</html>