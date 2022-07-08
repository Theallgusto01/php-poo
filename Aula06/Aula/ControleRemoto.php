<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{

    #Atributos

    private $volume;
    private $ligado;
    private $tocando;

    #Métodos 

    public function ControleRemoto(){

        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);

    }

    #GETTERS

    private function getVolume(){
        return $this->volume;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function getTocando(){
        return $this->tocando;
    }
    #SETTERS

    private function setVolume($nvl){
        $this->volume = $nvl;
    }
    private function setLigado($tlg){
        $this->ligado = $tlg;
    }
    private function setTocando($ttc){
        $this->tocando = $ttc;
    }
    #INTERFACE
    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        echo "<br/>Está ligado?  " .($this->getLigado()?"SIM":"NÃO");
        echo "<br/>Está Tocando? " .($this->getTocando()?"SIM":"NÃO");
        echo "<br/>Volume: "       .($this->getVolume());
        for($i=0; $i<$this->getVolume(); $i+=10) {
            echo "|";
        }
        echo "<br/>";
    }
    public function fecharMenu(){
        echo "Fechando menu....";
    }
    public function maisVolume(){
        if($this->getLigado()){

            $this->setVolume(getVolume() + 10);
        }else{
            echo "Ligue o dispositivo primeiro!<br/>";
        }

    }
    public function menosVolume(){
        if($this->getLigado()){
            $this->setVolume(getVolume() - 10);
        }else{
            echo "Ligue o dispositivo primeiro!<br/>";
        }

    }
    public function ligarMudo(){
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }else{
            echo "_ERROR__408_, não posso mutar!<br/>";
        }

    }
    public function desligarMudo(){
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }else{
            echo "_ERROR__409_, não posso desmutar<br/>";
        }

    }
    public function play(){
        if($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }else{
            echo "_ERROR__410_, não posso dar play<br/>";
        }

    }
    public function pause(){
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }else{
            echo "_ERROR__411_, não posso pausar<br/>";
        }

    }





}