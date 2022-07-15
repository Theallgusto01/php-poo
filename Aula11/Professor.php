<?php

class Professor extends Pessoa{

    private $especialidade;
    private $salario;

    public function receberAumento($valor){
        $this->salario += $valor;
        echo "Seu Salário foi aumentado em {$valor}";
    }
    public function getEspecialidade(){
        return $this->especialidade;
    } 
    public function getSalario(){
        return $this->salario;
    } 
    public function setEspecialidade($esp){
        $this->especialidade = $esp;
    } 
    public function setSalario($sal){
        $this->salario = $sal;
    }
}


?>