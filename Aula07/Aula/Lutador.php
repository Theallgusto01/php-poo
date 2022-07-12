<?php

#Requerimento da Interface 
require_once 'PerfilLutador.php';
class Lutador implements PerfilLutador{
#Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

#Métodos Especiais

    public function __construct($nome, $idade, $nacio, $altura, $peso, $vitorias, $derr, $emp){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setNacionalidade($nacio);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derr);
        $this->setEmpates($emp);
    }

    public function getNome(){
        return $this->nome;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function getEmpates(){
        return $this->empates;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function setNacionalidade($nacio){
        $this->nacionalidade = $nacio;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }
    public function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
    }
    public function setCategoria(){
        if ($this->getPeso() < 52.2){
            $this->categoria = "Inválido";
        }elseif( $this->getPeso() <= 70.3){
            $this->categoria = "Leve";
        }elseif ($this->getPeso() <=83.9){
            $this->categoria = "Médio";
        }elseif ($this->getPeso() <=120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }
    }
    public function setVitorias($vit){
        $this->vitorias = $vit;
    }
    public function setDerrotas($derr){
        $this->derrotas = $derr;
    }
    public function setEmpates($emp){
        $this->empates = $emp;
    }

    #Interface

    public function apresentar(){
        echo "<p>---------------------------------------</p><br/>";
        echo "O Lutador {$this->getNome()} diretamente de {$this->getNacionalidade()}<br/>
             com {$this->getIdade()} anos de idade e {$this->getPeso()} KG de puro músculo<br/>
             medindo {$this->getAltura()} classificado como {$this->getCategoria()} e possuindo<br/>
             {$this->getVitorias()} Vitorias, {$this->getDerrotas()} derrotas e {$this->getEmpates()} empates....";
        
    }




    public function status(){
            echo "------------------------------
            Nome do Lutador: {$this->getNome()}
            Idade: {$this->getIdade()}
            Nacionalidade: {$this->getNacionalidade()}
            Peso: {$this->getPeso()}
            Classificação: Peso {$this->getCategoria()}
            Nº de Vitórias; {$this->getVitorias()}
            Nº de Derrotas: {$this->getDerrotas()}
            Nº de Empates: {$this->getEmpates()}";
            
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }








}