<!doctype html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../../Public/Bootstrap/css/bootstrap.min.css">

    <title>Logado</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../Public/Pages/index.php">Sistema de Login</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Navegação</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../../Public/Pages/index.php">Sair</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Login bem-sucedido!</h1>
            </div>
            <div class="card-body">
                <p>Seus dados:</p>
                <ul class="list-group">
                    <li class="list-group-item">Nome:
                        <?php echo $nome; ?>
                    </li>
                    <li class="list-group-item">Email:
                        <?php echo $email; ?>
                    </li>
                    <li class="list-group-item">Telefone:
                        <?php echo $telefone; ?>
                    </li>
                    <li class="list-group-item">Sexo:
                        <?php echo $sexo; ?>
                    </li>
                </ul>
                <div class="mb-3 mt-3">
                    <form action="../Controler/userControler.php" method="POST">
                        <input type="hidden" name="page" value="deletar">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <button type="submit" class="btn btn-danger">Deletar Usuario</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script src="../../Public/Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>