<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include("ContaBanco.php");

        $p1 = new ContaBanco();
        $p2 = new ContaBanco();

        $p1->abrirConta("CC");
        $p1->setNumConta(1111);
        $p1->setDono("Neto");

        $p2->abrirConta("CP");
        $p2->setNumConta(2222);
        $p2->setDono("Bela");

        $p1->depositar(300);
        $p2->depositar(500);

        $p2->sacar(100);

        $p1->pagarMensal();
        $p2->pagarMensal();

        $p1->sacar(338);
        $p2->sacar(530);

        $p1->fecharConta();
        $p2->fecharConta();

        $p2->depositar(200);
        echo "<pre>";
        print_r($p1);
        print_r($p2);
        echo "</pre>";
    
    ?>
</body>
</html>