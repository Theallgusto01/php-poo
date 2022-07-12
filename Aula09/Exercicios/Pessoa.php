<?php
require_once 'Livro.php';
class Pessoa{

    #Atrubutos
    private $nome;
    private $idade;
    private $sexo;
    #Construct
    public function __construct($nom, $ida, $sex){
        $this->setNome($nom);
        $this->setIdade($ida);
        $this->setSexo($sex);
    }
    #Métodos especiais

    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getSexo(){
        return $this->sexo;
    }
    #############Setters###############
    private function setNome($no){
        $this->nome = $no;
    }    
    private function setIdade($id){
        $this->idade = $id;
    }
    private function setSexo($sex){
        $this->sexo = $sex;
    }
    #Métodos
    public function fazerAniversario(){
        $this->setIdade(getIdade() + 1);
    }
    }





?>