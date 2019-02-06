<?php

    $conn = new PDO('mysql:host=localhost;dbname=projeto', 'root', '');

    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $tipo = $_POST['tipo'];
    $potencia = $_POST['potencia'];
    $cilindradas = $_POST['cilindradas'];

    $conn->exec("insert into veiculo (nome, marca, modelo, tipo, potencia, cilindradas) 
                 values ('$nome', '$marca', '$modelo', '$tipo', '$potencia', '$cilindradas')");

    $conn = null;

    HEADER("LOCATION:visualizaVeiculos.php");

?>