<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php 
        $totSeg = $_GET['totSeg'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="totSeg">Qual é o total de segundos?</label>
            <input type="number" name="totSeg" id="totSeg" step="0.01" value="<?=$totSeg?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        $semana = 604_800;
        $dia = 86_400;
        $hora = 3_600;
        $min = 60;
        $seg = 1;

        $qtdSemana = (int)($totSeg / $semana);
        $qtdDia = (int)($totSeg / $dia);
        $qtdHora = (int)($totSeg / $hora);
        $qtdMin = (int)($totSeg / $min);
        $qtdSegundo = (int)($totSeg / $seg);
    ?>
    <section>
        <p>Analisando o valor que você digitou, <strong><?=number_format($totSeg, 3, ',', '.')?> segundos </strong>equivalem a um total de:</p>
        <ul>
            <li><?=$qtdSemana?> semanas</li>
            <li><?=$qtdDia?> dias</li>
            <li><?=$qtdHora?> horas</li>
            <li><?=$qtdMin?> minutos</li>
            <li><?=$qtdSegundo?> segundos</li>
        </ul>
    </section>
</body>
</html>