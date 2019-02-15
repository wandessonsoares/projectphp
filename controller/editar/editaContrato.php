<?php

    require_once("../../model/Contrato.php");

    $usuario = $_POST['codUsuario'];
    $locatario = $_POST['codLocatario'];
    $veiculo = $_POST['codVeiculo'];
    $dataInicio = $_POST['dataInicio'];
    $dataFim = $_POST['dataFinal'];

    session_start();
    $c = $_SESSION['contrato'];

    $contrato = new Contrato();

    $contrato->atualizaContrato($c->getId(), $usuario, $locatario, $veiculo, $dataInicio, $dataFim);

    HEADER("LOCATION:../../view/contratos.php");
?>