<?php

    require_once("Conexao.php");

    class Veiculo {
        protected $id;
        protected $nome;
        protected $marca;
        protected $modelo;
        protected $tipo;
        protected $potencia;

        public function __construct($nome ="",$marca="",$modelo="",$tipo="",$potencia=""){
            $this->nome = $nome;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->tipo = $tipo;
            $this->potencia = $potencia;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
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

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function getPotencia(){
            return $this->potencia;
        }

        public function setPotencia($potencia){
            $this->potencia = $potencia;
        }

        public function obtemVeiculos(){
            $conexao = new Conexao();
            $con = $conexao->getConexao();
            $veiculos = $con->query("select id, nome, marca, modelo, tipo, potencia from veiculo");
            $conexao->finalizaConexao();

            return $veiculos;
        }

        public function salvaVeiculo(){
            $conexao = new Conexao();
            $con = $conexao->getConexao();
            $con->exec("insert into veiculo (nome, marca, modelo, tipo, potencia) 
                            values ('$this->nome', '$this->marca', '$this->modelo', 
                                    '$this->tipo', '$this->potencia')");
            $conexao->finalizaConexao();
        }

        public function excluiVeiculo($id){
            $conexao = new Conexao();
            $con = $conexao->getConexao();
            $con->exec("delete from veiculo where id =". $id);
            $conexao->finalizaConexao();
        }

        public function atualizaVeiculo($id, $nome, $marca, $modelo, $tipo, $potencia){
            $conexao = new Conexao();
            $con = $conexao->getConexao();
            $con->exec("update veiculo set 
                        nome = '".$nome."', marca = '".$marca."', modelo = '".$modelo."', tipo = '".$tipo."', potencia = '".$potencia."'
                        where id = ".$id);
            $conexao->finalizaConexao();
        }

        public function obtemVeiculo($id){
            $conexao = new Conexao();
            $con = $conexao->getConexao();
            $veiculo = $con->query("select id, nome, marca, modelo, tipo, potencia 
                                    from veiculo where id='$id'");
            $conexao->finalizaConexao();

            return $veiculo->fetch();
        }
    }

?>