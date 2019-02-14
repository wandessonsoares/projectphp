<?php

    require_once("../../model/Usuario.php");

    $usuario = new Usuario();
    $id = $_GET['id'];

    $usuario->excluiPessoa($id);

    HEADER("LOCATION:../../view/usuarios.php");
?>