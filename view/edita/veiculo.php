<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Locação</title>
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <a class="brand" href="#"><i class="fas fa-car"></i> Sistema de Locação de Veículos</a>
                <ul class="nav">
                <li><a href="../../index.php">Home</a></li>
                <li><a href=../usuarios.php>Usuários</a></li>
                <li><a href=../locatarios.php>Locatários</a></li>
                <li><a href=../contratos.php>Contrato</a></li>
                <li><a href=../veiculos.php>Veículos</a></li>
                </ul>
            </div>
        </div>

        <?php 

            require_once("../../model/Veiculo.php");

            session_start();
            $veiculo = $_SESSION['veiculo'];
        ?>

        <div class="container">
        
            <form class="form-horizontal" action="../../controller/editar/editaVeiculo.php" method="POST">
                <div class="control-group">
                    <div class="controls">
                        <h3>Editar Veículo</h3>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Nome</label>
                    <div class="controls">
                    <input type="text" name="nome" value="<?php echo $veiculo->getNome(); ?>">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Marca</label>
                    <div class="controls">
                    <input type="text" name="marca" value="<?php echo $veiculo->getMarca(); ?>">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Modelo</label>
                    <div class="controls">
                    <input type="text" name="modelo" value="<?php echo $veiculo->getModelo(); ?>">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Tipo</label>
                    <div class="controls">
                        <select name="tipo">
                            <option value="1" <?php if ($veiculo->getTipo() == '1') echo 'selected'; ?> >Carro</option>
                            <option value="2" <?php if ($veiculo->getTipo() == '2') echo 'selected'; ?> >Moto</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Potência</label>
                    <div class="controls">
                    <input type="text" name="potencia" value="<?php echo $veiculo->getPotencia(); ?>">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a class="btn btn-primary" href="../veiculos.php">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>