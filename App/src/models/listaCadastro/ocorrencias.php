<?php

include_once("../../connection/conn.php");

if (isset(($_POST["ocorrencias"]))) {
    $ocorrencia = $_POST["ocorrencias"];

    $query = "SELECT P.ID, P.NOME, P.DATA_NASCIMENTO, G.GENERO, E.ESTADO_PACIENTE, T.TIPO_SANGUINEO, H.HOSPITAL, S.STATUS FROM tb_paciente AS P INNER JOIN genero AS G ON P.GENERO = G.ID INNER JOIN estado_paciente AS E ON P.ESTADO_PACIENTE = E.ID INNER JOIN tipo_sanguineo AS T ON P.TIPO_SANGUINEO = T.ID INNER JOIN unidade_de_saude AS H ON P.UNIDADE_DE_SAUDE = H.ID INNER JOIN status AS S on P.STATUS = S.ID WHERE S.ID = $ocorrencia";

    $resultado = $conn->query($query);

    $dados = '<div class="row justify-content-center">';

    $contador = 0;

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {

            if ($contador % 3 == 0) {
                $dados .= '</div>';
                $dados .= '<div class="row justify-content-center">';
            }
            $dados .= '<div class="col-4 col-lg-4 col-md-12 w-25"><div class="card mt-4 text-start">
                        <div class=" card-header h3">
                                Paciente: ' . $row["ID"] . '
                        </div>
                        <div class="card-body  text-start">
                            <h6 class="card-title">Nome: ' . $row["NOME"] . '</h6>
                            <h6 class="card-text">Tipo Sanguineo: ' . $row["TIPO_SANGUINEO"] . '</h6>
                            <h6 class="card-text">Estado do Paciente: ' . $row["ESTADO_PACIENTE"] . '</h6>
                            <h6 class="card-text">Hospital: ' . $row["HOSPITAL"] . '</h6>
                        </div>
                        <div class=" card-footer text-start">
                        <div class="row justify-content-between">
                            <button class="col-3 mr-2 btn btn-warning" id="'. $row["ID"] .'" onclick="editar(this.id);">Editar</button>
                            <button class="col-3 btn btn-danger" id="'. $row["ID"] .'" onclick="excluir(this.id);">Excluir</button>
                            </div>
                        </div>
                    </div></div>';
            $contador++;
        }
    }

    echo $dados;
}
