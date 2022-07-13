<?php

class Pessoa{

    private $nome;
    private $idade;
    private $sexo;

    #Métodos

    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setNome($nom){
        $this->nome = $nom;
    }
    public function setIdade($ida){
        $this->idade = $ida;
    }
    public function setSexo($sex){
        $this->sexo = $sex;
    }
    public function fazerAniversario(){
        $this->setIdade($this->getIdade() + 1);
    }







}







?>