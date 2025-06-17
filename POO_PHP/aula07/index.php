<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once "Lutador.php";
        require_once "Luta.php";

        $l = array();
        $l[0] = new Lutador("Neto", "Brasil", 37, 1.93, 95, 15, 0, 0);
        $l[1] = new Lutador("Beto", "EUA", 33, 1.85, 87, 7, 3, 1);
        $l[2] = new Lutador("Caio", "Argentina", 24, 1.89, 80, 11, 5, 3);
        //$l[2]->empatarLuta();
        //$l[2]->apresentar();
        //$l[0]->perderLuta();
        //$l[0]->status();
        $UEC01 = new Luta();
        $UEC01->marcarLuta($l[1], $l[2]);
        $UEC01->lutar();

    ?>
</body>
</html>