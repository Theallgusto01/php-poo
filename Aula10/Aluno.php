<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{

    private $matricula;
    private $curso;

    public function cancelarMatricula(){
            echo "Matricula será Cancelada";
        }
    public function getMatricula(){
        return $this->matricula;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setMatricula($mat){
        $this->matricula = $mat;
    }
    public function setCurso($cur){
        $this->curso = $cur;
    }



}







?>