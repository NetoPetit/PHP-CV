<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07 - Salário Mínimo</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário(R$)</label>
            <input type="number" name="salario" id="salario">
            <p>Considerando o salário mínimo de <strong>R$1.500,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $salario = $_GET['salario'] ?? 0;
            $numeros = range(0, $salario);
            $quantidade = 0;
            foreach($numeros as $numero){
                $quantidade += 1;
            }
            echo "qtd => $quantidade";
            echo "<p>Quem recebe um salário de R$" . number_format($salario, 2, ',', '.') . "ganha...</p>";
        ?>
    </section>
</body>
</html>