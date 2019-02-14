<?php

    require_once("../../model/Usuario.php");

    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];

    $usuario = new Usuario($matricula, $nome);

    $usuario->salvaUsuario();

    HEADER("LOCATION:../../view/usuarios.php");
?>