<?php 

include_once("../../connection/conn.php");

if (isset($_POST['email']) || isset($_POST['senha'])) {
    
    
    $email = $conn->real_escape_string($_POST['email']);
    $senha = $conn->real_escape_string($_POST['senha']);

    $query = "SELECT * FROM tb_usuarios WHERE LOGIN = '$email' and PASSWORD = '$senha'";

    $resultado = $conn->query($query);

    $quantidadeRows = $resultado->num_rows;

    if ($quantidadeRows == 1) {
        
        $usuario = $resultado->fetch_assoc();

        if(!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['user'] = $usuario['ID'];
        $_SESSION['email'] = $usuario['LOGIN'];
        


        echo 1;

    } else {
        echo 0;
    }


}
