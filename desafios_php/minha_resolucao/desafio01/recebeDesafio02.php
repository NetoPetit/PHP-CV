<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <section>
        <?php 
            $numero = $_GET['numero'];
            echo "<p>O numero escolhido foi <strong>$numero</strong></p>";
            echo "<p>O seu antecessor é " . ($numero - 1) . "</p>";
            echo "<p>O seu sucessor é " . ($numero + 1) . "</p>";
        ?>
        <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </section>
    

</body>
</html>