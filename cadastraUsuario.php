<?php

    $conn = new PDO('mysql:host=localhost;dbname=projeto', 'root', '');

    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];

    $conn->exec("insert into usuario (nome, matricula, cpf, tipo) 
                 values ('$nome', '$matricula', '', 1)");

    $conn = null;

    HEADER("LOCATION:visualizaUsuarios.php");

?>