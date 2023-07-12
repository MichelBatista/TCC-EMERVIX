<?php

include_once("../../../models/telaLogin/protect.php");

?>


<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/cards/style.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/pages/cadastroUrgencia/style.css">
    <!-- <link rel="stylesheet" href="../../assets/css/pages/listaCadastro/style.css"> -->

    <!-- JS JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <nav class="navbar navbar-dark bg-navbar">
        <div class="container">
            <a class="logo-navbar" id="logo" href="../inicio/index.php">EmerVix</a>
            <img src="../../assets/img/emevix_logo.png" style="width: 75px;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-2 text-end">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-navbar p-4 rounded-bottom">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                            <li class="nav-item">
                                <a class="nav-link active" href="../inicio/index.php">Inicio</a>
                            </li>
                            <li class="nav-item disabled">
                                <a class="nav-link" href="../cadastroUrgencia/index.php">Cadastro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../listaCadastro/index.php">Lista</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="deslogar()" style="cursor: pointer;">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row h1 mt-5">
            <div class="col text-center" style="color: red;">

            </div>
        </div>

    </div>
    <div class="container mt-5 justify-content-center">
        <div class="row text-center d-flex justify-content-center">
            <a class="col-5" href="../cadastroUrgencia/index.php">
                <div class="bg-navbar m-auto justify-content-center text-center rounded" style="width: 25vw;height: 25vh;display: flex;flex-direction: row;align-items: center;">

                    <img src="../../assets/img/docs_icon.svg" class="w-25" alt="">
                    <h3 class="text-center text-white">Iniciar Atendimento</h3>


                </div>
            </a>
            <a class="col-5" href="../listaCadastro/index.php">
                <div class=" bg-navbar justify-content-center text-center rounded" style="width: 25vw; height: 25vh;display: flex;flex-direction: row;justify-content: center;align-items: center;">

                    <img src="../../assets/img/docs_icon.svg" class="w-25" alt="">
                    <h3 class="text-center text-white">Ocorrências</h3>

                </div>
            </a>
        </div>
    </div>





    <script src="../../assets/js/global/script.js"></script>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <!-- JS JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</body>

</html>