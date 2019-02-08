<?php

    $conn = new PDO('mysql:host=localhost;dbname=projeto', 'root', '');

    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $tipo = $_POST['tipo'];
    $potencia = $_POST['potencia'];

    $conn->exec("insert into veiculo (nome, marca, modelo, tipo, potencia) 
                 values ('$nome', '$marca', '$modelo', '$tipo', '$potencia')");

    $conn = null;

    HEADER("LOCATION:visualizaVeiculos.php");

?>