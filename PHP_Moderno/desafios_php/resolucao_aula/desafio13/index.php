<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="../../style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_GET['saque'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
            <p style="font-size: 0.6em"><sup>*</sup>Notas disoníveis R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $resto = $saque;
        $tot100 = floor($resto / 100);
        $resto = $resto % 100;
        $tot50 = floor($resto / 50);
        $resto = $resto % 50;
        $tot10 = floor($resto / 10);
        $resto = $resto % 10;
        $tot5 = floor($resto / 5);
    ?>
    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ',', '.')?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="img/100-reais.jpg" alt="Nota de 100" class="nota"> x <?=$cem?></li><br/>
            <li><img src="img/50-reais.jpg" alt="Nota de 50" class="nota"> x <?=$cinquenta?></li><br/>
            <li><img src="img/10-reais.jpg" alt="Nota de 10" class="nota"> x <?=$dez?></li><br/>
            <li><img src="img/5-reais.jpg" alt="Nota de 5" class="nota"> x <?=$cinco?></li>
        </ul>
    </section>

</body>
</html>