<?php

    require_once("Conexao.php");

    class Contrato{
        private $id;
        private $usuario;
        private $locatario;
        private $veiculo;
        private $dataInicio;
        private $dataFim;

        public function __construct($usuario="", $locatario="", $veiculo="", $dataInicio="", $dataFim=""){
            $this->usuario = $usuario;
            $this->locatario = $locatario;
            $this->veiculo = $veiculo;
            $this->dataInicio = $dataInicio;
            $this->dataFim = $dataFim;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getUsuario(){
            return $this->usuario;
        }

        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function getLocatario(){
            return $this->locatario;
        }

        public function setLocatario($locatario){
            $this->locatario = $locatario;
        }

        public function getVeiculo(){
            return $this->veiculo;
        }

        public function setVeiculo($veiculo){
            $this->veiculo = $veiculo;
        }

        public function getDataInicio(){
            return $this->dataInicio;
        }

        public function setDataInicio($dataInicio){
            $this->dataInicio = $dataInicio;
        }

        public function getDataFim(){
            return $this->dataFim;
        }

        public function setDataFim($dataFim){
            $this->dataFim = $dataFim;
        }

        public function obtemContratos(){
            $conexao = new Conexao();
            $con = $conexao->getConexao();
            $contratos = $con->query("select id, usuario, locatario, veiculo, data_inicio, data_fim 
                                    from contrato");
            $conexao->finalizaConexao();

            return $contratos;
        }

        public function salvaContrato(){
            $conexao = new Conexao();
            $con = $conexao->getConexao();
            $con->exec("insert into contrato (usuario, locatario, veiculo, data_inicio, data_fim) 
                            values ('$this->usuario', '$this->locatario', '$this->veiculo', 
                                    '$this->dataInicio', '$this->dataFim')");
            $conexao->finalizaConexao();
        }

        public function excluiContrato($id){
            $conexao = new Conexao();
            $con = $conexao->getConexao();
            $con->exec("delete from contrato where id =". $id);
            $conexao->finalizaConexao();
        }

        public function obtemContrato($id){
            $conexao = new Conexao();
            $con = $conexao->getConexao();
            $contrato = $con->query("select id, usuario, locatario, veiculo, data_inicio, data_fim 
                                    from contrato where id='$id'");
            $conexao->finalizaConexao();

            return $contrato->fetch();
        }

        public function atualizaContrato($id, $usuario, $locatario, $veiculo, $data_inicio, $data_fim){
            $conexao = new Conexao();
            $con = $conexao->getConexao();
            $con->exec("update contrato set 
                        usuario = '".$usuario."', locatario = '".$locatario."', veiculo = '".$veiculo."', data_inicio = '".$data_inicio."', data_fim = '".$data_fim."'
                        where id = ".$id);
            $conexao->finalizaConexao();
        }
    }
?>