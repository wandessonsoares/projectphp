<?php

    $conn = new PDO('mysql:host=localhost;dbname=projeto', 'root', '');

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];

    $conn->exec("insert into usuario (nome, matricula, cpf, tipo) 
                 values ('$nome', '', '$cpf', 2)");

    $conn = null;

    HEADER("LOCATION:visualizaLocatarios.php");

?>