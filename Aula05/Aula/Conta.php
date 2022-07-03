<?php

class Conta {

    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    /*
     * Método Construtor
     */

    public function Conta($d, $t){

        $this->setDono($d);
        $this->setTipo($t);
        $this->setStatus(false);
        $this->setSaldo(0);

    }
    /*Métodos Getters e Setters */
    public function getNumConta(){
        return $this->numConta;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getDono(){
        return $this->dono;
    }   
    public function getSaldo(){
        return $this->saldo;
    }
    public function getStatus(){
        return $this->status;
    }

    public function setNumConta($conta){
        $this->numConta = $conta;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function setDono($dono){
        $this->dono = $dono;
       
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function setStatus($status){
        $this->status = $status;
    }

    /*Metódos da Classe */

    public function abrirConta(){
        if($this->getTipo() == "CC"){
            $this->setSaldo(50);
            echo "Conta Corrente aberta! Saldo de R$50,00 Adicionado!<br/>";
        }else{
            $this->setSaldo(150);
            echo "Conta Poupança aberta! Saldo de R$150,00 Adicionado<br/>";
        }
        $this->setStatus(true);

    }
    public function fecharConta(){
        if($this->getSaldo() == 0){
            $this->setStatus(false);
            echo "Conta Encerrada!<br/>";
        }else{
            echo "Para fechar a conta não deve possuir saldo ou débito!";
        }
    }
    public function depositar($tanto){
        if($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() + $tanto);
            echo "{$this->getDono()} depositou: R$ $tanto<br/>";
        }else{
            echo "Conta não está aberta!<br/>";
        }
    }
    public function sacar($quantia){
        if ($this->getStatus()){
            if($this->getSaldo() >= $quantia){
                $this->setSaldo($this->getSaldo() - $quantia);
                echo "{$this->getDono()} sacou: R$ $quantia<br/>";
            }else{
                echo "Saldo Insuficiente";
            }
        }else{
            echo "A conta não está aberta!";
        }
    }
    public function pagarMensalidade(){
        ($this->getTipo() == "CC")?$this->saldo -= 12:$this->saldo -= 20;
    }


    
}