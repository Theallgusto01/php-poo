<?php

abstract class Pessoa{

    protected $nome;
    protected $idade;
    protected $sexo;

    private final function fazerAniversario(){
        $this->idade ++;
    }
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





}











?>