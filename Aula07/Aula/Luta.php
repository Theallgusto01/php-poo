<?php
require_once 'Lutador.php';
class Luta {
    
#atributos

    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

# Métodos Getters e Seters


    private function getDesafiante(){
        return $this->desafiante;
    }
    private function getDesafiado(){
        return $this->desafiado;
    }
    private function getRounds(){
        return $this->rounds;
    }
    private function getAprovada(){
        return $this->aprovada;
    }
    #setters
    private function setDesafiante($d){
        $this->desafiante = $d;
    }
    private function setDesafiado($dd){
        $this->desafiado = $dd;
    }
    private function setRounds($round){
        $this->rounds = $round;
    }
    private function setAprovada($ap){
        $this->aprovada = $ap;
    }

#Métodos Publicos

    public function marcarLuta($l1, $l2)
    {
        if (($l1->getCategoria() == $l2->getCategoria()) && ($l1 != $l2))
        {
            $this->desafiado = $l1;
            $this->desafiante = $l2;
            $this->aprovada = true;
            echo "Luta marcada entre {$this->desafiante->getNome()} e {$this->desafiado->getNome()}";
        }else
        {
            $this->setDesafiante(null);
            $this->setDesafiado(null);
            $this->setAprovada(false);
            echo "Luta Não Agendada";
        }
    }
    public function lutar(){
        if($this->getAprovada()){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $result = rand(0, 2);
            switch ($result){
                case 0:
                    echo "Empate!";
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                    break;
                case 1:
                    echo "{$this->desafiante->getNome()} venceu!";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
                case 2:
                    echo "{$this->desafiado->getNome()} venceu!";
                    $this->desafiante->perderLuta();
                    $this->desafiado->ganharLuta();
                    break;
            }
        }else{
            echo "Luta Não pode ocorrer...";
        }
                    
        }
        
    }   


?>