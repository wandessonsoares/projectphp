<?php

    $conn = new PDO('mysql:host=localhost;dbname=projeto', 'root', '');

    $contratos = $conn->query("select id, nome, cpf from usuario where tipo=2");

    if ($locatarios){
        echo "<h1>Locatários</h1>" . "<ul>";

        foreach($locatarios as $locatario)
            echo "<li>" 
                . $locatario['nome'] . '-' 
                . $locatario['cpf'] . '-'
                . '<a href="excluifamosos.php?id=' . $locatario['id'] . '">Excluir</a><br>'
                . "</li>";

        echo "</ul>";
    }

    echo '<br><a href="cadastrarLocatario.html">Cadastrar Locatário</a><br>';
    echo '<a href="index.html">Inicio</a><br>';

    $conn = null;

?>