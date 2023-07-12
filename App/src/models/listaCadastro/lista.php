<?php

include_once("../../connection/conn.php");

if (isset($_POST)) {

    $query = "SELECT P.ID, P.NOME, P.DATA_NASCIMENTO, G.GENERO, E.ESTADO_PACIENTE, T.TIPO_SANGUINEO, H.HOSPITAL, S.STATUS FROM tb_paciente AS P INNER JOIN genero AS G ON P.GENERO = G.ID INNER JOIN estado_paciente AS E ON P.ESTADO_PACIENTE = E.ID INNER JOIN tipo_sanguineo AS T ON P.TIPO_SANGUINEO = T.ID INNER JOIN unidade_de_saude AS H ON P.UNIDADE_DE_SAUDE = H.ID INNER JOIN status AS S on P.STATUS = S.STATUS";

    $resultado = $conn->query($query);
    $html = '';

    // <th scope="row">Tiger Nixon</th>
    // <td>System Architect</td>
    // <td>tnixon12@example.com</td>
    // <td>61</td>
    // <td>Edinburgh</td>
    // <td>$320,800</td>

    while ($row = $resultado->fetch_row()) {
        $html .= '<tr>';

            $html .= '<th>' . $row[0] . '</th>';
            $html .= '<th>' . $row[1] . '</th>';
            $html .= '<th>' . $row[2] . '</th>';
            $html .= '<th>' . $row[3] . '</th>';
            $html .= '<th>' . $row[4] . '</th>';
            $html .= '<th>' . $row[5] . '</th>';
            $html .= '<th>' . $row[6] . '</th>';
            $html .= '<th>' . $row[7] . '</th>';

        $html .= '</tr>';
    }

    echo $html;

}

?>