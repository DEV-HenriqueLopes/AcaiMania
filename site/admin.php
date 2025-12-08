<?php
    session_start();


    if (isset($_SESSION['alert'])) {
        $mensagem_erro = $_SESSION['alert'];
        
        unset($_SESSION['alert']); 
    
        echo "<script>";
        echo "alert(" . json_encode($mensagem_erro) . ");";
        echo "</script>";
    }

    if(!isset($_SESSION['emailLogin']) || !isset($_SESSION['senhaLogin'])) {
        $_SESSION['alert'] = "Acesso negado! Faça login como administrador.";
        header('Location: login.php');
        exit();

        unset($_SESSION['emailLogin']);
        unset($_SESSION['senhaLogin']);
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Açai Mania | Administrador</title>
    <link rel="shortcut icon" href="../imagens/ChatGPT Image 26 de nov. de 2025, 09_07_41.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom bg-gray navbar-dark fixed-top d-lg-flex d-none">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <h1 class="text-dark font-comemorativa">Açai Mania | Administração</h1> 
            </a>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="btn active bg-danger" aria-current="page" href="index.html">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar bg-gray fixed-top d-lg-none d-flex navbar-custom navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <h1 class="text-dark font-comemorativa">Açai Mania | Administração</h1> 
            </a>
            <button class="navbar-toggler mb-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="btn active bg-danger" aria-current="page" href="sair.php">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>