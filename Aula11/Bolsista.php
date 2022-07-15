<?php
require_once 'Aluno.php';
class Bolsista extends Aluno{

    private $bolsa;
    public function renovarBolsa(){
        echo "Bolsa Renovada";
    }

    public function getBolsa(){
        return $this->bolsa;
    }
    public function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }
    public function pagarMensalidade() {
        echo "{$this->nome} é bolsista, logo paga com desconto<br/>";

    }
}