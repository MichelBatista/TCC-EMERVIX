<?php

include_once("../../connection/conn.php");

if(isset($_POST["excluir"])) {
    $idAtual = $conn->real_escape_string($_POST["excluir"]);

    $query = "DELETE FROM `emervix`.`tb_paciente` WHERE (`ID` = '$idAtual');";

    $conn->query($query);

    $conn->commit();

    echo 1;
}

?>