<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Encapsulamento - PHP - POO</title>
</head>
<body>
    <pre>
    <?php 
    require_once 'ControleRemoto.php';
    $controle = new ControleRemoto();

    $controle->setLigado(true);
   
    // $controle->setTocando(true);
    $controle->play();
    // $controle->pause();
    $controle->abrirMenu();

    print_r($controle)
    
    
    
    ?>
    </pre>
</body>
</html>