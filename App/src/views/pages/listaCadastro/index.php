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

    <link rel="stylesheet" href="../../assets/css/modal/style.css">
    <link rel="stylesheet" href="../../assets/css/cards/style.css">
    <link rel="stylesheet" href="../../assets/css/pages/cadastroUrgencia/style.css">
    <!-- CSS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../../assets/js/pages/listaCadastro/script.js"></script>

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


    <div class="container mt-4 w-50">
        <div class="row justify-content-center">
            <div class="col-5 text-center">
                <label class="form-label text-label" for="firstName"><span class="h2">Ocorrências</span></label>
                <select id="selectConsulta" class="form-select statusAtendimento form-select-sm form-control" id="statusOcorrencia">
                    <option value="0" selected>
                        </optiown>
                    <option value="1">Em Analise</option>
                    <option value="2">Em Atendimento</option>
                    <option value="3">Concluido</option>
                </select>
                <!-- <label class="form-label text-error" id="estadoPacienteError" hidden></label> -->
            </div>
        </div>
    </div>
    </div>
    <div class="container mt-4 " id="cardsOcorrencia">

    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-tittle" id="tituloModal"></h5>
                </div>
                <div class="modal-body" id="conteudoModal">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="form-outline">
                                <label class="form-label text-label" for="firstName">Nome Completo (opcional)</label>
                                <input type="text" id="nomeCompleto" class="form-control form-control"></input>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-4 d-flex align-items-center">
                            <div class="form-outline datepicker w-100">
                                <label for="birthdayDate" class="pr-1 form-label text-label">Data de Nascimento</label>
                                <input type="date" class="form-control  border-input" id="dataNascimento"></input>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 mb-4">
                            <label class="form-label text-label" for="firstName">Estado Paciente</label>
                            <select class="form-select form-control" disabled id="estadoPaciente">
                                <!-- <option value="0" selected id="estadoPaciente">Muito Urgente</option> -->
                            </select>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10  mb-4">
                            <label class="form-label text-label" for="firstName">Tipo Sanguineo</label>
                            <select class="form-select form-control" id="tipoSanguineo">
                                <option value="0" selected></option>
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

                        <div class="col-10">
                            <label class="form-label text-label" for="firstName">Unidade Selecionada</label>
                            <select class="form-select form-control" disabled id="unidadeDisponivel">
                                <option value="0" selected>Unidades Disponíveis</option>
                            </select>
                            <label class="form-label text-error" id="unidadeDisponivelError"></label>
                        </div>

                        <div class="col-10">
                            <label class="form-label text-label" for="firstName">Status</label>
                            <select class="form-select form-control" id="selectStatus">
                                <!-- <option value="0" ></option> -->
                                <option value="1" selected>Em Analise</option>
                                <option value="2">Em Atendimento</option>
                                <option value="3">Concluido</option>
                            </select>
                            <label class="form-label text-error" id="unidadeDisponivelError"></label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="enviarDadosEditado()">Enviar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box fechar">
                        <i class="material-icons">&#xE5CD;</i>
                    </div>
                    <h4 class="modal-title w-100">Deseja excluir essa ocorrencia?</h4>
                    <button type="button" class="close fechar" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Se você excluir essa ocorrencia os dados serão apagados..</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary fechar">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="opDeletar">Delete</button>
                </div>
            </div>
        </div>
    </div>


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

    <script src="../../assets/js/cards/vendor-all.min.js"></script>
    <script src="../../assets/js/cards/plugins/bootstrap.min.js"></script>
    <script src="../../assets/js/cards/pcoded.min.js"></script>

    <script src="../../assets/js/global/script.js"></script>

    <script src="../../assets/js/pages/listaCadastro/script.js"></script>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <!-- JS JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</body>

</html>