<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Locação</title>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    </head>
    <body>
    <div class="navbar">
        <div class="navbar-inner">
                <a class="brand" href="#"><i class="fas fa-car"></i> Sistema de Locação de Veículos</a>
                <ul class="nav">
                <li><a href="../index.php">Home</a></li>
                <li><a href=usuarios.php>Usuários</a></li>
                <li><a href=locatarios.php>Locatários</a></li>
                <li><a href=contratos.php>Contrato</a></li>
                <li><a href=veiculos.php>Veículos</a></li>
                </ul>
            </div>
        </div>

        <div class="container">
            <a class="btn" href="novo/veiculo.php"><i class="fas fa-plus"></i> Novo</a><br><br>

            <table class="table table-hover">
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Modelo</th> 
                    <th>Tipo</th>
                    <th>Potência</th>
                    <th></th>
                </tr>

            <?php

                require_once("../model/Veiculo.php");

                $veiculo = new Veiculo();
                $veiculos = $veiculo->obtemVeiculos();

                if ($veiculos){

                    foreach($veiculos as $v)
                        echo "<tr>"
                            . '<th>' . $v['id'] . '</th>'  
                            . '<th>' . $v['nome'] . '</th>' 
                            . '<th>' . $v['marca'] . '</th>'
                            . '<th>' . $v['modelo'] . '</th>'
                            . '<th>' . $v['tipo'] . '</th>'
                            . '<th>' . $v['potencia'] . '</th>'
                            . '<th>' . 
                                '<a class="btn btn-mini" href="../controller/obter/obtemVeiculo.php?id=' . $v['id'] . '"><i class="fas fa-edit"></i> Editar</a>' . ' ' . 
                                '<a class="btn btn-mini" href="../controller/excluir/excluiVeiculo.php?id=' . $v['id'] . '"><i class="fas fa-trash-alt"></i> Excluir</a>'
                            . '</th>'
                            . "</tr>";

                    echo "</table>";
                }

            ?>
        </div>

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>