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

            require_once("../../model/Contrato.php");

            session_start();
            $contrato = $_SESSION['contrato'];
        ?>

        <div class="container">
            <form class="form-horizontal" action="../../controller/editar/editaContrato.php" method="POST">
                <div class="control-group">
                    <div class="controls">
                    <h3>Cadastrar Contrato</h3>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Usuario</label>
                    <div class="controls">
                        <select name="codUsuario">
                            <?php
                                require_once("../../model/Usuario.php");

                                $usuario = new Usuario();
                                $usuarios = $usuario->obtemUsuarios();
                                
                                if($usuarios){
                                    foreach($usuarios as $u){
                                        if ($contrato->getUsuario() == $u['id']){
                                            echo '<option value="'. $u['id'] . '" selected >'. $u['matricula'] . ' - ' . $u['nome'] .'</option>';
                                        }
                                        else{
                                            echo '<option value="'. $u['id'] . '">'. $u['matricula'] . ' - ' . $u['nome'] .'</option>';
                                        }
                                    }
                                }

                            ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Locatario</label>
                    <div class="controls">
                        <select name="codLocatario">
                            <?php
                                require_once("../../model/Locatario.php");

                                $locatario = new Locatario();
                                $locatarios = $locatario->obtemLocatarios();
                                
                                if($locatarios){
                                    foreach($locatarios as $l){
                                        if ($contrato->getLocatario() == $l['id']){
                                            echo '<option value="'. $l['id'] . '" selected >'. $l['cpf'] . ' - ' . $l['nome'] .'</option>';
                                        }else{
                                            echo '<option value="'. $l['id'] . '">'. $l['cpf'] . ' - ' . $l['nome'] .'</option>';
                                        }
                                    }
                                }

                            ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Veiculo</label>
                    <div class="controls">
                        <select name="codVeiculo">
                            <?php
                                require_once("../../model/Veiculo.php");

                                $veiculo = new Veiculo();
                                $veiculos = $veiculo->obtemVeiculos();
                                
                                if($veiculos){
                                    foreach($veiculos as $v){
                                        if ($contrato->getVeiculo() == $v['id']){
                                            echo '<option value="'. $v['id'] . '" selected >'. $v['marca'] . ' - ' . $v['nome'] . ' - ' . $v['modelo'] . '</option>';
                                        } else{
                                            echo '<option value="'. $v['id'] . '">'. $v['marca'] . ' - ' . $v['nome'] . ' - ' . $v['modelo'] . '</option>';
                                        }
                                    }
                                }

                            ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Data Início</label>
                    <div class="controls">
                    <input type="date" name="dataInicio" value="<?php echo $contrato->getDataInicio(); ?>">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Data Final</label>
                    <div class="controls">
                    <input type="date" name="dataFinal" value="<?php echo $contrato->getDataFim(); ?>"> 
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a class="btn btn-primary" href="../contratos.php">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>