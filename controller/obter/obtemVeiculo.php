<?php

    require_once("../../model/Veiculo.php");

    $veiculo = new Veiculo();
    $id = $_GET['id'];

    $veiculoEditar = $veiculo->obtemVeiculo($id);
    $veiculo->setId($veiculoEditar['id']);
    $veiculo->setNome($veiculoEditar['nome']);
    $veiculo->setMarca($veiculoEditar['marca']);    
    $veiculo->setModelo($veiculoEditar['modelo']);
    $veiculo->setTipo($veiculoEditar['tipo']);
    $veiculo->setPotencia($veiculoEditar['potencia']);            

    session_start();

    $_SESSION['veiculo'] = $veiculo;

    HEADER("LOCATION:../../view/edita/veiculo.php");
?>