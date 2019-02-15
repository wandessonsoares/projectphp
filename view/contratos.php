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

            <a class="btn" href="novo/contrato.php"><i class="fas fa-plus"></i> Novo</a><br><br>

            <table class="table table-hover">
                <tr>
                    <th>Código</th>
                    <th>Usuário</th>
                    <th>Locatário</th> 
                    <th>Veículo</th>
                    <th>Data Início</th> 
                    <th>Data Fim</th> 
                    <th></th>
                </tr>

            <?php

                require_once("../model/Contrato.php");
                require_once("../model/Usuario.php");
                require_once("../model/Locatario.php");
                require_once("../model/Veiculo.php");

                $contrato = new Contrato();
                $contratos = $contrato->obtemContratos();

                $usuario = new Usuario();
                $locatario = new Locatario();
                $veiculo = new Veiculo();

                if ($contratos){

                    foreach($contratos as $c){
                        $u = $usuario->obtemUsuario($c['usuario']);
                        $l = $locatario->obtemLocatario($c['locatario']);
                        $v = $veiculo->obtemVeiculo($c['veiculo']);

                        echo "<tr>"
                            . '<th>' . $c['id'] . '</th>'  
                            . '<th>' . $u['matricula']. ' - '. $u['nome'] . '</th>' 
                            . '<th>' . $l['cpf'] . ' - ' . $l['nome'] . '</th>'
                            . '<th>' . $v['marca'] . ' ' . $v['nome'] . ' ' . $v['modelo'] . ' ' . $v['potencia'] . '</th>'
                            . '<th>' . $c['data_inicio'] . '</th>'
                            . '<th>' . $c['data_fim'] . '</th>'
                            . '<th>' .
                                '<a class="btn btn-mini" href="../controller/obter/obtemContrato.php?id=' . $c['id'] . '"><i class="fas fa-edit"></i> Editar</a>' . ' ' .
                                '<a class="btn btn-mini" href="../controller/excluir/excluiContrato.php?id=' . $c['id'] . '"><i class="fas fa-trash-alt"></i> Excluir</a><br>'
                            . '</th>'
                            . "</tr>";
                    }

                    echo "</table>";
                }

            ?>
        </div>

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>