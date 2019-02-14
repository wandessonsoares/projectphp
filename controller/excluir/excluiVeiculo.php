<?php

    require_once("../../model/Veiculo.php");

    $veiculo = new Veiculo();
    $id = $_GET['id'];

    $veiculo->excluiVeiculo($id);

    HEADER("LOCATION:../../view/veiculos.php");
?>