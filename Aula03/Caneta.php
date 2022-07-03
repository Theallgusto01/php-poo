<?php

    class Caneta {
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;
    
       public function rabiscar() {
            if ($this->tampada == true) {
        
                echo "Erro não posso rabiscar<br/>";
            
            }else {
        
                echo "Estou rabiscando...<br/>"; 
            }

        }

        public function tampar(){
            $this->tampada = true;
        }
        private function destampar(){
            $this->tampada = false;
        }
    }
    
    

?>