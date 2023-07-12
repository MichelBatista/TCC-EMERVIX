<?php
include_once("../../connection/conn.php");

if (isset($_POST)) {

    $nome = $conn->real_escape_string($_POST["nomeCompleto"]);
    $dataNascimento = $conn->real_escape_string($_POST["dataNascimento"]);
    $genero = $conn->real_escape_string($_POST["genero"]);
    $estadoPaciente = $conn->real_escape_string($_POST["estadoPaciente"]);
    $tipoSanguineo = $conn->real_escape_string($_POST["tipoSanguineo"]);
    $unidadeDisponivel = $conn->real_escape_string($_POST["unidadeDisponivel"]);

    $quantidadeSalasDisponvieis = validarUnidade($unidadeDisponivel, $conn);

    echo $quantidadeSalasDisponvieis;

    if ($quantidadeSalasDisponvieis != 0) 
    {

        $novaQuantidadeDeSalas = $quantidadeSalasDisponvieis - 1;


        $queryUpdate = "UPDATE unidade_de_saude SET SALAS_DISPONIVEIS=$novaQuantidadeDeSalas WHERE id = '$unidadeDisponivel'";

        try {
            $conn->query($queryUpdate);

        } catch (Exception $e) {

            $conn->rollback();
            echo -1;
        }

        if ($conn->commit()) {
        
            $queryInsercao = $query = "INSERT INTO tb_paciente (`NOME`, `DATA_NASCIMENTO`, `GENERO`, `ESTADO_PACIENTE`, `TIPO_SANGUINEO`, `UNIDADE_DE_SAUDE`, `STATUS`, `DATA_INICIO`) VALUES ('$nome', '$dataNascimento', '$genero', '$estadoPaciente', '$tipoSanguineo', '$unidadeDisponivel', '1', NOW());";

            try {
                $conn->query($queryInsercao);
                
            } catch (Exception $e) {

                $conn->rollback();

                echo -2;

            }
        }

    } else {

        echo 0;
        
    }

}

function validarUnidade($id_unidade, $conn)
{

    $query = "SELECT SALAS_DISPONIVEIS FROM unidade_de_saude WHERE ID = '$id_unidade'";

    $resultado = $conn->query($query);

    if ($row = $resultado->fetch_assoc()) {

        $quantidadeSalasDisponvieis = $row["SALAS_DISPONIVEIS"];

        if ($quantidadeSalasDisponvieis > 3) {

            return $quantidadeSalasDisponvieis;
        } else {

            return 0;
        }
    }
    // return
}
