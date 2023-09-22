<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de números</title>
</head>
<body>
    <header>
        <h1>Gerador de números aleatórios</h1>
    </header>
    
    <section>
        <form>
            <p>Gerar número aleatório entre 1 e 100</p>
            <input type="submit" value="Gerar número">
            
            <?php 
                define("inferior", 1);
                define("superior", 100);
                $num = mt_rand(inferior, superior);

                echo "<p>O número gerado foi: $num</p>";
            ?> 

        </form>
    </section>

</body>
</html>
