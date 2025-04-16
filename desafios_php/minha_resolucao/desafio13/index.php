<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor" value="<?=$valor?>">
            <p>*Notas disoníveis R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $sobra = $valor;
        $cem = (int)($sobra / 100);
        $sobra = $sobra % 100;
        $cinquenta = (int)($sobra / 50);
        $sobra = $sobra % 50;
        $dez = (int)($sobra / 10);
        $sobra = $sobra % 10;
        $cinco = (int)($sobra / 5);
    ?>
    <section>
        <h2>Saque de R$<?=number_format($valor, 2, ',', '.')?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="https://www.bcb.gov.br/novasnotas/assets/img/section/100/100_front.jpg" alt="Nota de 100" width="100px" height="50px"> x <?=$cem?></li><br/>
            <li><img src="https://www.bcb.gov.br/novasnotas/assets/img/section/50/50_front.jpg" alt="Nota de 50" width="100px" height="50px"> x <?=$cinquenta?></li><br/>
            <li><img src="https://www.bcb.gov.br/novasnotas/assets/img/section/10/10_front.jpg" alt="Nota de 10" width="100px" height="50px"> x <?=$dez?></li><br/>
            <li><img src="https://www.bcb.gov.br/novasnotas/assets/img/section/5/5_front.jpg" alt="Nota de 5" width="100px" height="50px"> x <?=$cinco?></li>
        </ul>
    </section>
</body> 
</html>