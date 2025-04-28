<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <main>
        <h1>Analisador de Numero Real</h1>
        <?php 
            $numero = $_GET['numero'] ?? 0;
            $numeroInteiro = floor($numero);
            $numeroDecimal = $numero - $numeroInteiro;
            echo "<p>Analisando o número <strong>" . number_format($numero, 3, ',', '.') . "</strong> informado pelo usuário:</p>";
            echo "
                <ul>
                    <li>A parte inteira do número é <strong>" . number_format($numeroInteiro, 0, ',', '.') . "</strong></li>
                    <li>A parte fracionária do número é <strong>" .number_format($numeroDecimal, 3, ',', '.') . "</strong></li>
                </ul>
            ";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>