<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <pre>
        <?php 
            require_once 'Caneta.php';
            
            $c1 = new Caneta;
            $c1->modelo = 'BIC Cristal';
            $c1->cor = 'Azul';
            //$c1->ponta = 00;
            //$c1->carga = 10;
            //$c1->tampada = true;
            $c1->rabiscar();
            $c1->tampar();
            $c1->destampar();
            print_r($c1);
        ?>
    </pre>
</body>
</html>