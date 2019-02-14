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
                <li><a href="../index.php">Home</a></li>
                <li><a href=usuarios.php>Usuários</a></li>
                <li><a href=locatarios.php>Locatários</a></li>
                <li><a href=contratos.php>Contrato</a></li>
                <li><a href=veiculos.php>Veículos</a></li>
                </ul>
            </div>
        </div>
        
        <div class="container">
            
            <form class="form-horizontal" action="../../controller/cadastrar/cadastraUsuario.php" method="POST">
                <div class="control-group">
                    <div class="controls">
                    <h3>Cadastrar Usuário</h3>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Nome</label>
                    <div class="controls">
                    <input type="text" name="nome">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Matrícula</label>
                    <div class="controls">
                    <input type="text" name="matricula">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a class="btn btn-primary" href="../usuarios.php">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>