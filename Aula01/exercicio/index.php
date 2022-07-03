<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Exercício Aula 01 - POO</title>
    </head>
    <body>

        <?php
            require_once 'Notebook.php';
            require_once 'Ferias.php';
        
            $computador = new Notebook;
            $computador->modelo = "Ideapad-320";
            $computador->ligado = false;
            $computador->fabricante = "Lenovo";
            $computador->tela = 17.0;
            $computador->sistema = "Linux Mint";

            //$computador->ligar();
            $computador->desligar();
            print_r($computador);

            $descanso = new Ferias;
            
            $descanso->ano = 2022;
            $descanso->duracao = 30;
            $descanso->inicio = "27/06/2022";
            $descanso->fim = "27/07/2022";
            $descanso->periodo = "Julho";

            print_r($descanso);


        
        ?>


    </body>

</html>