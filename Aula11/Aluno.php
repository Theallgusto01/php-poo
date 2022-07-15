<?php
require_once 'Pessoa.php';
/*final (a classe não pode ter filhos)*/class Aluno extends Pessoa{

    private $matricula;
    private $curso;

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

    public function pagarMensalidade() {
        echo "Pagando mensalidade do Aluno {$this->nome}";

    }


}

?>