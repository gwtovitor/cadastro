<!doctype html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">

    <title>Sistema de Login</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Sistema de login</a>
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
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=cadastrar">Novo Usuario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=logar">Logar</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include_once('../../Server/db/conexao.php');
                switch (@$_REQUEST["page"]) {
                    case "cadastrar":
                        include("criarUsuario.php");
                        break;
                    case "logar":
                        include("logarUsuario.php");
                        break;
                    case "salvar":
                        include("../../Server/Model/userModel.php");
                        break;
                    default:
                        print("<h1>Bem Vindo!</h1>");
                }
                ?>
            </div>
        </div>
    </div>
    <script src="../Bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>