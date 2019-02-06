<?php

    $conn = new PDO('mysql:host=localhost;dbname=projeto', 'root', '');

    $carros = $conn->query("select id, marca, nome, potencia from veiculo where tipo=1");

    if ($carros){
        echo "<h1>Veículos</h1>" 
             ."<h2>Carros</h2>"
             . "<ul>";

        foreach($carros as $carro)
            echo "<li>" 
                . $carro['marca'] . '-' 
                . $carro['nome'] . '-'
                . $carro['potencia'] . ' '
                . '<a href="excluifamosos.php?id=' . $carro['id'] . '">Excluir</a><br>'
                . "</li>";

        echo "</ul>";
    }

    $motos = $conn->query("select id, marca, nome, cilindradas from veiculo where tipo=2");

    if ($motos){
        echo "<h2>Motos</h2>"
             . "<ul>";

        foreach($motos as $moto)
            echo "<li>" 
                . $moto['marca'] . '-' 
                . $moto['nome'] . '-'
                . $moto['cilindradas'] . ' '
                . '<a href="excluifamosos.php?id=' . $moto['id'] . '">Excluir</a><br>'
                . "</li>";

        echo "</ul>";
    }

    echo '<br><a href="cadastrarVeiculo.html">Cadastrar Veículo</a><br>';
    echo '<a href="index.html">Inicio</a><br>';

    $conn = null;

?>