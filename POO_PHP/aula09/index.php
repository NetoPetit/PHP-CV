<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once "Pessoa.php";
        require_once "Livro.php";

        $p[0] = new Pessoa("Pedro", 22, "M");
        $p[1] = new Pessoa("Mario", 35, "M");
    ?>
</body>
</html>