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
            //numero digitado
            $n = $_GET["numero"];

            $inicio = date("m-d-Y", strtotime("-7 days"));//pega uma semana antes

            $fim = date("m-d-Y");//pega data atual

            //cotação da api banco central
            $link = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio.'\'&@dataFinalCotacao=\''. $fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($link), true);//true transforma em array

            $cotacao = $dados["value"][0]["cotacaoCompra"];//busca cotacao no array

            $converter = $n/$cotacao;//calculo base

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);//criar global para utilizar formato de moeda internacional

            echo "<p>Você possui: <strong>" . numfmt_format_currency($padrao, $n, "BRL") . "</strong></p>";
            echo "<p>Equivale a: <strong>" . numfmt_format_currency($padrao, $converter, "USD") . "</strong></p>";
            echo "<p><strong>***Cotação de ". numfmt_format_currency($padrao, $cotacao, "BRL")."</strong></p>";
        ?>
        
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>