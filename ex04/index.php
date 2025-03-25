<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com Formulários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Cadastro</h1>
    </header>
    <section>
        <form action="cad.php" method="get">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" id="sobrenome" name="sobrenome">
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>