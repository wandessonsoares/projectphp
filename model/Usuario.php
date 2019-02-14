<?php

    require_once("Pessoa.php");

    class Usuario extends Pessoa {
        private $matricula;

        public function __construct($matricula = "", $nome=""){
            $this->matricula = $matricula;
            $this->setNome($nome);
        }

        public function getMatricula(){
            return $this->matricula;
        }

        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        public function salvaUsuario(){
            $this->salvaPessoa($this->nome, '', $this->matricula, 1);
        }

        public function obtemUsuarios(){
            return $usuarios = $this->obtemPessoas(1);
        }

        public function obtemUsuario($id){
            $usuario = $this->obtemPessoa($id, 1);

            return $usuario->fetch();
        }

        public function atualizaUsuario($id, $nome, $matricula){
            $this->atualizaPessoa($id, $nome, '', $matricula, 1);
        }
    }
?>