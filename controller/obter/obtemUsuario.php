<?php

    require_once("../../model/Usuario.php");

    $usuario = new Usuario();
    $id = $_GET['id'];

    $usuarioEditar = $usuario->obtemUsuario($id);
    $usuario->setid($usuarioEditar['id']);
    $usuario->setNome($usuarioEditar['nome']);
    $usuario->setMatricula($usuarioEditar['matricula']);

    session_start();

    $_SESSION['usuario'] = $usuario;

    HEADER("LOCATION:../../view/edita/usuario.php");
?>