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
        <?php 

            $cotacao = 5.74;
            $real = $_GET['din'] ?? 0;

            //conversao
            $dolar = $real / $cotacao;

            //formatação de moedas com internacionalização
            //bliblioteca intl (internalization)
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
            
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>
</html>

