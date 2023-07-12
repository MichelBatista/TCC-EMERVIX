<?php

    include_once("../../connection/conn.php");

    if(isset($_POST)) {
        
        $query = "SELECT ID, HOSPITAL, SALAS_DISPONIVEIS FROM unidade_de_saude";

        $resultado = $conn->query($query);

        $htmlSelect = '<option  value="0">Unidades Disponíveis</option>';
        // <option value="1">Subject 1</option>
        // <option value="2" disabled>Subject 2</option>
        // <option value="3">Subject 3</option>
        while ($row = $resultado->fetch_row()) {
            if ($row[2] > 3) 
                $htmlSelect .= '<option value="' . $row[0] . '">' . $row[1] .'</option>';
            else 
                $htmlSelect .= '<option disabled value="' . $row[0] . '">' . $row[1] .'</option>';

        }
        
        echo $htmlSelect;

    }

?>