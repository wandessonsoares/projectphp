<?php

    require_once("../../model/Contrato.php");

    $contrato = new Contrato();
    $id = $_GET['id'];

    $contrato->excluiContrato($id);

    HEADER("LOCATION:../../view/contratos.php");
?>