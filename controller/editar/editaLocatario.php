<?php

    require_once("../../model/Locatario.php");

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];

    session_start();
    $loc = $_SESSION['locatario'];

    $locatario = new Locatario();

    $locatario->atualizaLocatario($loc->getId(), $nome, $cpf);

    HEADER("LOCATION:../../view/locatarios.php");
?>