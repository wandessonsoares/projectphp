<?php

    require_once("../../model/Veiculo.php");

    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $tipo = $_POST['tipo'];
    $potencia = $_POST['potencia'];

    $veiculo = new Veiculo($nome, $marca, $modelo, $tipo, $potencia);

    $veiculo->salvaVeiculo();

    HEADER("LOCATION:../../view/veiculos.php");
?>