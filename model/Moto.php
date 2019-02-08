<?php

    class Moto extends Veiculo{
        private $cilindradas;

        public function __construct($cilindradas = ""){
            $this->cilindradas = $cilindradas;
        }

        public function getCilindradas(){
            return $this->cilindradas;
        }

        public function setCilindradas($cilindradas){
            $this->cilindradas = $cilindradas;
        }
    }

?>