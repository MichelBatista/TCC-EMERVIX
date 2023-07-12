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

    <!-- CSS -->
    
    <link rel="stylesheet" href="../../assets/css/modal/style.css">
    <link rel="stylesheet" href="../../assets/css/cards/style.css">
    <link rel="stylesheet" href="../../assets/css/pages/cadastroUrgencia/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="../../assets/js/pages/listaCadastro/script.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">




</head>

<body>

    <nav class="navbar navbar-dark bg-navbar">
        <div class="container">
            <a class="logo-navbar" id="logo"  href="../inicio/index.php">EmerVix</a>
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



    <section class="gradient-custom">
        <div class="container ">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Cadastro Rapido</h3>
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label text-label" for="firstName">Nome Completo (opcional)</label>
                                        <input type="text" id="nomeCompleto" class="form-control form-control" />
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">
                                    <div class="form-outline datepicker w-100">
                                        <label for="birthdayDate" class="pr-1 form-label text-label">Data de Nascimento</label>
                                        <input type="date" class="form-control  border-input" id="dataNascimento" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h6 class="mb-2 pb-1">Genero: </h6>
                                    <div class="form-check form-check-inline custom-control custom-radio custom-control-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="1" checked />
                                        <label class="form-check-label text-label" for="femaleGender">Feminino</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="2" />
                                        <label class="form-check-label text-label" for="maleGender">Masculino</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="3" />
                                        <label class="form-check-label text-label" for="otherGender">Outro</label>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-12  mb-4">
                                    <label class="form-label text-label" for="firstName">Estado Paciente</label>
                                    <select class="form-select form-control" id="estadoPaciente">
                                        <option value="0" selected></option>
                                        <option value="1">Emergência</option>
                                        <option value="2">Muito Urgente</option>
                                        <option value="3">Urgente</option>
                                        <option value="4">Pouco Urgente</option>
                                        <option value="5">Não Urgente</option>
                                    </select>
                                    <label class="form-label text-error" id="estadoPacienteError" hidden></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12  mb-4">
                                    <label class="form-label text-label" for="firstName">Tipo Sanguineo (opcional)</label>
                                    <select class="form-select form-control" id="tipoSanguineo">
                                        <option value="0" selected></option>
                                        <option value="1">A+</option>
                                        <option value="2">A-</option>
                                        <option value="3">B+</option>
                                        <option value="4">B-</option>
                                        <option value="5">AB+</option>
                                        <option value="6">AB-</option>
                                        <option value="7">O+</option>
                                        <option value="8">O-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-5">
                                    <button class="btn btn-primary" onclick="getUnidadesDisponiveis()">Verificar Unidades</button>
                                </div>
                                <div class="col-7">
                                    <select class="form-select form-control" disabled id="unidadeDisponivel">
                                        <option value="0" selected>Unidades Disponíveis</option>
                                    </select>
                                    <label class="form-label text-error" id="unidadeDisponivelError"></label>
                                </div>
                            </div>
                            <div class="row mt-4 pt-2">
                                <div class="col text-start">
                                    <img src="../../assets/img/emevix_logo.png" style="width: 100px;" alt="">
                                </div>
                                <div class="col text-end">
                                    <button class="btn-primary btn" onclick="getDados()">Enviar Relatorio e Cadastrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
    <!-- Modal HTML -->
    <div id="myModal2" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box2 fechar">
                        <i class="material-icons check">&#xe5ca;</i>
                    </div>
                    <h4 class="modal-title w-100">Deseja confirmar o envio dos dados?</h4>
                    <button type="button" class="close fechar" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Ao confirmar os dados serão editados..</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary fechar">Cancelar</button>
                    <button type="button" class="btn btn-success" id="opEnviar">Enviar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- JS -->
    <script src="../../assets/js/global/script.js"></script>
    <script src="../../assets/js/pages/cadastroUrgencia/script.js"></script>


    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <!-- JS JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>

</html>