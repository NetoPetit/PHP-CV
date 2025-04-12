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
        $seg = $_GET['seg'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" step="0.01" value="<?=$seg?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <p>Analisando o valor que você digitou, <strong><?=number_format($seg, 3, ',', '.')?> segundos </strong>equivalem a um total de:</p>
        <ul>
            <li>semanas</li>
            <li>dias</li>
            <li>horas</li>
            <li>minutos</li>
            <li>segundos</li>
        </ul>
    </section>
</body>
</html>