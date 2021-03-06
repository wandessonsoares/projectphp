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

        public function obtemPessoa($id, $tipo){
            $conexao = new Conexao();
            $con = $conexao->getConexao();
            $pessoa = $con->query("select id, nome, cpf, matricula 
                                    from pessoa where tipo='$tipo' and id='$id'");
            $conexao->finalizaConexao();

            return $pessoa;
        }

        public function excluiPessoa($id){
            $conexao = new Conexao();
            $con = $conexao->getConexao();
            $con->exec("delete from pessoa where id =". $id);
            $conexao->finalizaConexao();
        }

        public function atualizaPessoa($id, $nome, $cpf, $matricula){
            $conexao = new Conexao();
            $con = $conexao->getConexao();
            $con->exec("update pessoa set 
                        nome = '".$nome."', cpf = '".$cpf."', matricula = '".$matricula."'
                        where id = ".$id);
            $conexao->finalizaConexao();
        }
    }

?>