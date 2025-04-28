<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    
    <main>
        <h1>Trabalhando com numeros aleatorios</h1>
        <form>
            <p>
                <?php 
                    $numAleatorio = mt_rand(0, 100);//pode ser random_int(),mas ele é mais lento porque gera um numero criptografado.
                    echo "Gerando um numero aleatório entre 0 e 100";
                    echo "<br>O numero gerado é <strong>$numAleatorio</strong>";
                ?>
            </p>
            <button onclick="javascript:window.location.href='index.php'">&#x21bb;Gerar Outro</button>
        </form>
    </main>
    
</body>
</html>