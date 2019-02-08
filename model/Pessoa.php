<?php

    class Pessoa {
        protected $id;
        protected $nome;

        public function __construct($nome = "", $id=""){
            $this->nome = $nome;
            $this->id = $id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }
    }

?>