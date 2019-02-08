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
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href=visualizaUsuarios.php>Usuários</a></li>
                <li><a href=visualizaLocatarios.php>Locatários</a></li>
                <li><a href=visualizaContratos.php>Contrato</a></li>
                <li><a href=visualizaVeiculos.php>Veículos</a></li>
                </ul>
            </div>
        </div>
        
        <h3>Cadastrar Locatário</h3>
        <form class="form-horizontal" action="cadastraLocatario.php" method="POST">
            <div class="control-group">
                <label class="control-label">Nome</label>
                <div class="controls">
                <input type="text" name="nome">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">CPF</label>
                <div class="controls">
                <input type="text" name="cpf">
                </div>
            </div>
            <div class="control-group">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a class="btn btn-primary" href="visualizaLocatarios.php">Cancelar</a>
            </div>
        </form>

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>