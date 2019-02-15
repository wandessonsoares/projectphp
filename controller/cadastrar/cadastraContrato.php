<?php

    require_once("../../model/Contrato.php");

    $codUsuario = $_POST['codUsuario'];
    $codLocatario = $_POST['codLocatario'];
    $codVeiculo = $_POST['codVeiculo'];
    $dataInicio = $_POST['dataInicio'];
    $dataFinal = $_POST['dataFinal'];

    $contrato = new Contrato($codUsuario, $codLocatario, $codVeiculo, $dataInicio, $dataFinal);

    $contrato->salvaContrato();

    HEADER("LOCATION:../../view/contratos.php");
?>