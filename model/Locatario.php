<?php

    class Locatario extends Pessoa {
        private $cpf;

        public function __construct($cpf = ""){
            $this->cpf = $cpf;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

?>