<?php

class Funcionario extends Pessoa{

    private $setor;
    private $trabalhando;

    public function mudarTrabalho(){
        $this->setTrabalhando(!$this->getTrabalhando());
    }

    public function getSetor(){
        return $this->setor;
    }
    public function getTrabalhando(){
        return $this->trabalhando;
    } 
    public function setSetor($set){
        $this->setor = $set;
    }
    public function setTrabalhando($trab){
        $this->trabalhando = $trab;
    }

}








?>