<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1> 
    <?php 
        include("ControleRemoto.php");
        
        $c1 = new ControleRemoto();

        $c1->ligar();
        $c1->maisVolume(30);
        $c1->abrirMenu();
    ?>
</body>
</html>