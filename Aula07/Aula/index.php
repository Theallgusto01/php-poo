<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php 
        require_once 'Lutador.php';
        require_once 'Luta.php';
        $L = array();
        $L[0] = new Lutador("Pretty Boy", 31, "França", 1.75, 68.9 , 11, 2, 1);#Nome, idade, nacionalidade, altura, peso, vitorias, derrotas, empates
        $L[1] = new Lutador("Putscript", 29, "Brasil", 1.68, 57.8 , 14, 2, 3);
        $L[2] = new Lutador("SnapShadow", 35, "EUA", 1.65, 80.9 , 12, 2, 1);
        $L[3] = new Lutador("Dead Code", 28, "Austrália",1.93, 81.6 , 13, 0, 2);
        $L[4] = new Lutador("UFOCobol", 37, "Brasil",1.70, 119.3,  5, 4, 3);
        $L[5] = new Lutador("Nerdaart", 30, "EUA",1.81, 105.7, 12, 2, 4);
        
        $luta1 = new Luta();
        $luta1->marcarLuta($L[0], $L[1]);
        $luta1->lutar();
        $L[0]->status();
        $L[1]->status();
        
        ?>
    </pre>
</body>
</html>
