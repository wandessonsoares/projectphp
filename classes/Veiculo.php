<?php

    class Veiculo {
        protected $nome;
        protected $marca;
        protected $modelo;

        public function __construct($nome ="",$marca="",$modelo=""){
            $this->nome = $nome;
            $this->marca = $marca;
            $this->modelo = $modelo;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }
    }

?>