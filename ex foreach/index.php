<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            width: 960px;
            margin: 10% auto;
        }
        table{
            margin: 0 auto;
        }
        tr, td{
            text-align: center;
            padding: 15px;
            background-color: lightblue;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <table>
    <?php
        $cadastro = [
            [
                "nome" => "João Silva",
                "idade" => 25,
                "email" => "joao.silva@gmail.com",
                "E.civil" => "Solteiro",
                "Salario" => "1950",
            ],
            [
                "nome" => "Rafael Cardoso",
                "idade" => 32,
                "email" => "rafaelcardoso@gmail.com",
                "E.civil" => "Casado",
                "Salario" => "5541", 
            ],
            [
                "nome" => "Gabriela Schidt",
                "idade" => 21,
                "email" => "gabischidt@gmail.com",
                "E.civil" => "Solteira",
                "Salario" => "3214", 
            ],
            [
                "nome" => "Roberta Oliveira",
                "idade" => 38,
                "email" => "Roberta.oliveira@gmail.com",
                "E.civil" => "Divorciada",
                "Salario" => "4258", 
            ],
            [
                "nome" => "Pedro Santos",
                "idade" => 17,
                "email" => "pebolado@gmail.com",
                "E.civil" => "Solteiro",
                "Salario" => "2100", 
            ],
        ];

        foreach ($cadastro as $item){
            echo "<tr>";

            foreach ($item as $person => $value) {
                echo "<td>{$value}</td>";
            }

            echo "</tr>";
        }

    ?>
    </table>
</body>
</html>