<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercíco Prático - Aula 05 - PHP POO</title>
    </head>
    <body>
    <pre>
    <?php
    require_once "Conta.php";
    $conta1 = new Conta('Thiago', 'CP');#A conta recebe como parâmetro Dono , Tipo respectivemente;
    $conta1->abrirConta();
    echo "Você abriu uma conta do tipo {$conta1->getTipo()}<br/>";
    $conta1->sacar(150);
    // $conta1->fecharConta();
    $conta1->depositar(150);
    $conta1->pagarMensalidade();
    print_r($conta1);

    
    ?>
    <pre>
    </body>
</html>