<?php

    require_once("../../model/Contrato.php");

    $contrato = new Contrato();
    $id = $_GET['id'];

    $contratoEditar = $contrato->obtemContrato($id);
    $contrato->setId($contratoEditar['id']);
    $contrato->setUsuario($contratoEditar['usuario']);
    $contrato->setLocatario($contratoEditar['locatario']);    
    $contrato->setVeiculo($contratoEditar['veiculo']);
    $contrato->setDataInicio($contratoEditar['data_inicio']);
    $contrato->setDataFim($contratoEditar['data_fim']);            

    session_start();

    $_SESSION['contrato'] = $contrato;

    HEADER("LOCATION:../../view/edita/contrato.php");
?>