<?php

class Caneta{

    public  $modelo;
    private $ponta;
    private $tampada;
    private $cor;


    public function Caneta($modelo, $cor, $ponta){/*O método construtor ao invés de __construct pode ser o nome da classe! PHP é facinho!*/

        // $this->modelo = "Bic Cristal";
        // $this->cor = "Preta";
        // $this->tampar();
        $this->setModelo($modelo); #Podemos atribuir aos parâmetros das duas maneiras, diretamente ou chamando o método!
        $this->cor = $cor;
        $this->setPonta($ponta);
        $this->tampar();
        $this->cor = $cor;
    }

    public function tampar(){

        $this->tampada = true;

    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($m)
    {
        $this->modelo = $m;
    }

    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($ponta)
    {
        $this->ponta = $ponta;
    }
}