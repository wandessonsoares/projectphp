<?php

    require_once("Pessoa.php");

    class Locatario extends Pessoa {
        private $cpf;

        public function __construct($cpf = "", $nome=""){
            $this->cpf = $cpf;
            $this->setNome($nome);
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function salvaLocatario(){
            $this->salvaPessoa($this->nome, $this->cpf, '', 2);
        }

        public function obtemLocatarios(){
            return $locatarios = $this->obtemPessoas(2);
        }
    }
?>