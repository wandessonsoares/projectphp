<?php

    require_once("../../model/Locatario.php");

    $locatario = new Locatario();
    $id = $_GET['id'];

    $locatario->excluiPessoa($id);

    HEADER("LOCATION:../../view/locatarios.php");
?>