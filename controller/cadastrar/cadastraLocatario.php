<?php

    require_once("../../model/Locatario.php");

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];

    $locatario = new Locatario($cpf, $nome);

    $locatario->salvaLocatario();

    HEADER("LOCATION:../../view/locatarios.php");
?>