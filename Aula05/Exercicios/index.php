<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
   
    <title>Testes</title>
</head>
<body>
    <pre>
    <?php
    
    require_once "../Aula/Conta.php";
    $p1 = new Conta("Jubileu", "CC");
    $p2 = new Conta("Creuza", "CP");
    $p1->abrirConta();
    $p2->abrirConta();
    
    $p1->setNumConta(1111);
    $p2->setNumConta(2222);
    $p1->depositar(300);
    $p2->depositar(500);
    $p2->sacar(100);    
    print_r($p1);
    print_r($p2);
    ?>
    </pre>
</body>
</html>