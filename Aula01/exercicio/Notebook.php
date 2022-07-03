<?php

    Class Notebook {

        var $modelo;
        var $ligado;
        var $tela;
        var $sistema;
        var $fabricante;

        function ligar(){

            if ($this->ligado == true){

                echo "Notebook já Ligado<br/>";
            }else{

                echo "Ligando Notebook<br/>";
                $this->ligado = true;
            }
        }
        function desligar(){
            if ($this->ligado == true){

                echo "Desligando Notebook<br/>";
                $this->ligado = false;
            }else{

                echo "Notebook não está ligado...<br/> ";

                
            }

        }

    }
 