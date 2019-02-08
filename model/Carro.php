<?php

    class Carro extends Veiculo{
        private $potencia;
        
        public function __construct($potencia = ""){
            $this->potencia = $potencia;
        }

        public function getPotencia(){
            return $this->potencia;
        }

        public function setPotencia($potencia){
            $this->potencia = $potencia;
        }
    }; 

?>