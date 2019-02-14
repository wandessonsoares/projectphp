<?php

    require_once("Conexao.php");

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

        public function salvaPessoa($nome, $cpf, $matricula, $tipo){
            $conexao = new Conexao();
            $con = $conexao->getConexao();
            $con->exec("insert into pessoa (nome, cpf, matricula, tipo) 
                            values ('$nome', '$cpf', '$matricula', '$tipo')");
            $conexao->finalizaConexao();
        }

        public function obtemPessoas($tipo){
            $conexao = new Conexao();
            $con = $conexao->getConexao();
            $pessoas = $con->query("select id, nome, cpf, matricula from pessoa where tipo='$tipo'");
            $conexao->finalizaConexao();

            return $pessoas;
        }
    }

?>