<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <p>
            <?php 
                $valor = $_GET['valor'];
                $cotacao = 5.74;
                $conversao = $valor / $cotacao;
                echo "Seus <strong>R$" . number_format($valor, 2, ",", ".") . "</strong> equivalem a <strong>U$$" . number_format($conversao, 2, ",", ".") . "</strong>"; 
            ?>
        </p>
        <label>Na cotação atual de R$5.74</label>
        <button onclick="javascript:location.href='index.php'">&#x2B05;<strong>Voltar</strong></button>
    </main>
</body>
</html>