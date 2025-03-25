<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET['nome'] ?? "vazio";
            $sobrenome = $_GET['sobrenome'] ?? "vazio";
            echo "<p>Seja bem vindo <strong>$nome $sobrenome</strong>!</p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
    </main>
</body>
</html>