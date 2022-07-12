<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'Pessoa.php';
    require_once 'Livro.php';
    $jose = new Pessoa('Jose', 32, 'Masculino');
    $l1 = new Livro('Moby Dick', 'Herman Melville', 320, $jose);
    $l1->abrir();
    $l1->avancarPag();
    $l1->folear(160);
    $l1->detalhes();




    ?>
</body>
</html>
