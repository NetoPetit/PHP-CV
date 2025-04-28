<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? 1;
        $porcentagem = $_GET['porcentagem'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="1" value="<?=$preco?>">
            <label for="porcentagem">Qual será o percentual do reajuste<strong><p id="valor"></p>%</strong></label>
            <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" value="<?=$porcentagem?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <?php
            $reajuste = ($porcentagem * $preco) / 100; 
            $valorAtual = $preco + $reajuste;
        ?>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?=number_format($preco, 2, ',', '.')?>, com <strong><?=$porcentagem?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($valorAtual, 2, ',', '.')?></strong> a partir de agora.</p>
    </section>
    <script>
        const range = document.getElementById("porcentagem");
        const valor = document.getElementById("valor");

        valor.textContent = range.value;
        range.addEventListener("input", function() {
            valor.textContent = range.value;
        });
    </script>
</body>
</html>