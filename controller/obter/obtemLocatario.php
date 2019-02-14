<?php

    require_once("../../model/Locatario.php");

    $locatario = new Locatario();
    $id = $_GET['id'];

    $locatarioEditar = $locatario->obtemLocatario($id);
    $locatario->setid($locatarioEditar['id']);
    $locatario->setNome($locatarioEditar['nome']);
    $locatario->setCpf($locatarioEditar['cpf']);

    session_start();

    $_SESSION['locatario'] = $locatario;

    HEADER("LOCATION:../../view/edita/locatario.php");
?>