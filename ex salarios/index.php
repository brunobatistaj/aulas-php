<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex.4</title>
</head>
<body>
    <form action="form.php" method="GET">

        <input name="nome" placeholder="Nome">

        <input name="idade" placeholder="Idade">

        <label><input type="radio" name="sexo"
        value="m">Masculino</label>

        <label><input type="radio" name="sexo"
        value="f">Feminino</label>
    
        <div>
            <span>Últimos três salários</span>
            <input name="salarios1">
            <input name="salarios2">
            <input name="salarios3">
        </div>

        <button>Enviar</button>
    </form>

</body>
</html>