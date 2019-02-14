<?php

    require_once("../../model/Usuario.php");

    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];

    session_start();
    $user = $_SESSION['usuario'];

    $usuario = new Usuario();

    $usuario->atualizaUsuario($user->getId(), $nome, $matricula);

    HEADER("LOCATION:../../view/usuarios.php");
?>