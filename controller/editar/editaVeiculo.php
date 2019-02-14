<?php

    require_once("../../model/Veiculo.php");

    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $tipo = $_POST['tipo'];
    $potencia = $_POST['potencia'];

    session_start();
    $v = $_SESSION['veiculo'];

    $veiculo = new Veiculo();

    $veiculo->atualizaVeiculo($v->getId(), $nome, $marca, $modelo, $tipo, $potencia);

    HEADER("LOCATION:../../view/veiculos.php");
?>