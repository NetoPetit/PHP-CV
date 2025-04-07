<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <main>
        
        <?php 
            $numero = $_GET['numero'] ?? 0;
        ?>
    
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
        <section>
            <h2>Resultado Final</h2>
            <?php
                $quadrada = sqrt($numero);
                $cubica = pow($numero, 1/3); 
                echo "<p>Analisando o <strong>número $numero</strong> temos</p>";
                echo "<ul>
                        <li>A sua raiz quadarada é <strong>".number_format($quadrada, 3, ',', '.')."</strong></li>
                        <li>A sua raiz cubica é <strong>".number_format($cubica, 3, ',', '.')."</strong></li>
                      </ul>";
            ?>

        </section>
    </main>
</body>
</html>