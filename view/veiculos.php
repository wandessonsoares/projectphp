<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Locação</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    </head>
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <a class="brand" href="#"><i class="fas fa-car"></i> Sistema de Locação de Veículos</a>
                <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li><a href=visualizaVeiculos.php>Usuários</a></li>
                <li><a href=visualizaLocatarios.php>Locatários</a></li>
                <li><a href=visualizaContratos.php>Contrato</a></li>
                <li><a href=visualizaVeiculos.php>Veículos</a></li>
                </ul>
            </div>
        </div>

        <a class="btn" href="cadastrarVeiculo.html"><i class="fas fa-plus"></i> Novo</a><br><br>

        <table class="table table-hover">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Marca</th>
                <th>Modelo</th> 
                <th>Tipo</th>
                <th>Potência</th>
                <th></th>
            </tr>

        <?php

            require_once("classes/Conexao.php");

            $conexao = new Conexao;
            $con = $conexao->getConexao();
            $veiculos = $con->query("select id, nome, marca, modelo, tipo, potencia from veiculo");

            if ($veiculos){

                foreach($veiculos as $veiculo)
                    echo "<tr>"
                        . '<th>' . $veiculo['id'] . '</th>'  
                        . '<th>' . $veiculo['nome'] . '</th>' 
                        . '<th>' . $veiculo['marca'] . '</th>' 
                        . '<th>' . $veiculo['modelo'] . '</th>' 
                        . '<th>' . $veiculo['tipo'] . '</th>'
                        . '<th>' . $veiculo['potencia'] . '</th>'
                        . '<th>' . '<a class="btn btn-mini" href="excluifamosos.php?id=' . $veiculo['id'] . '"><i class="fas fa-trash-alt"></i> Excluir</a><br>' . '</th>'
                        . "</tr>";

                echo "</table>";
            }

            $conexao->finalizaConexao();

        ?>

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>