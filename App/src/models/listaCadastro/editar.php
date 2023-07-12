<?php

include_once("../../connection/conn.php");

if(isset($_POST["dadosId"])) {
    
    $idAtual = $conn->real_escape_string($_POST["dadosId"]);
    
    $query = "SELECT P.ID, P.NOME, P.DATA_NASCIMENTO, G.GENERO, E.ESTADO_PACIENTE, T.TIPO_SANGUINEO, H.HOSPITAL, S.STATUS FROM tb_paciente AS P INNER JOIN genero AS G ON P.GENERO = G.ID INNER JOIN estado_paciente AS E ON P.ESTADO_PACIENTE = E.ID INNER JOIN tipo_sanguineo AS T ON P.TIPO_SANGUINEO = T.ID INNER JOIN unidade_de_saude AS H ON P.UNIDADE_DE_SAUDE = H.ID INNER JOIN status AS S on P.STATUS = S.ID WHERE P.ID = $idAtual";

    $resultado = $conn->query($query)->fetch_assoc();

    $dadosTratado = [$resultado["NOME"], $resultado["ESTADO_PACIENTE"], $resultado["HOSPITAL"]];

    echo json_encode($dadosTratado);
    
} else if (isset($_POST)) { 
    
    $id = $conn->real_escape_string($_POST["id"]);
    $nome = $conn->real_escape_string($_POST["nomeCompleto"]);
    $dataNascimento = $conn->real_escape_string($_POST["dataNascimento"]);
    $tipoSanguineo = $conn->real_escape_string($_POST["tipoSanguineo"]);
    $status = $conn->real_escape_string($_POST["status"]);

    $queryUpdate = "UPDATE tb_paciente SET NOME='$nome', DATA_NASCIMENTO='$dataNascimento', TIPO_SANGUINEO='$tipoSanguineo', STATUS='$status', DATA_FINAL=NOW() WHERE id = '$id'";

 
    $conn->query($queryUpdate);
    
    if ($conn->commit()) {
        echo 1;
    }
}

?>
