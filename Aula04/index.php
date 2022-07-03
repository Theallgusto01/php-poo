<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Metodos Getter, Setter e Construtor - Aula 04</title>
</head>
<body>
    <h1>Medotos Especiais</h1>
    <?php
    require_once 'Caneta.php';
    $c1 = new Caneta("Compactor", "Vermelha", 0.7); /*Modelo, cor, ponta*/    
    // $c1->setModelo("BIC cristal");
    // $c1->setPonta(0.5);
    // echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";

    print_r($c1);

    ?>

    
</body>
</html>