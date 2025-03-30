<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>
    <link rel="stylesheet" href="../desafios_php/style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);
                //http://localhost/PHP_CV/ex05/superglobais.php?nome=Neto&idade=36 (passando dados pro array através da URL)

                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);

                //Superglobal REQUEST pega o GET e o POST
                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);
            ?>
        </pre>
    </main>
</body>
</html>