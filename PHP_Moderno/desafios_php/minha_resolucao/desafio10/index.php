<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php 
        $anoAtual = date('Y');
        $anoNasc = $_GET['anoNasc'] ?? 1900;
        $anoIdade = $_GET['anoIdade'] ?? $anoAtual;
        $resultado = $anoIdade - $anoNasc;
    ?>
    <main>
        <h1>Calculando sua Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anoNasc">Em que ano você nasceu?</label>
            <input type="number" name="anoNasc" id="ano" required value="<?=$anoNasc?>">
            <label for="anoIdade">Quer saber sua idade em que ano?(Atualmente estamos em <strong><?=$anoAtual?></strong>)</label>
            <input type="number" name="anoIdade" id="anoIdade" required value="<?=$anoIdade?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$anoNasc?> vai ter <strong><?=$resultado?> anos </strong> em <?=$anoIdade?>!</p>
    </section>
    
</body>
</html>