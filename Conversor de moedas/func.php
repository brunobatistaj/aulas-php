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
            $cotacao = 5.08;
            $converter = $n/$cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);//criar global para utilizar formato de moeda internacional

            echo "<p>Você possui: " . numfmt_format_currency($padrao, $n, "BRL") . "</p>";
            echo "<p>Equivale a " . numfmt_format_currency($padrao, $converter, "USD") . "</p>";
            echo "<p><strong>***Cotação fixa de R\$ 5.08</strong></p>";
        ?>
        
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>