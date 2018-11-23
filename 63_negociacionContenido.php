<?php

$pepe = json_decode('{ "id": 23, "nombre": "Jose" }');

function ponerXML($alumno) {
    return "<alumno id=\"" . $alumno->id . "\">" .
             $alumno->nombre .
            "</alumno>";
}

$formato = $_SERVER['HTTP_ACCEPT'] or 'html';

switch ($formato) {
    case 'application/xml':
        header('Content-type: application/xml');
        echo ponerXML($pepe);
        break;
    case 'application/json':
        header('Content-type: application/json');
        echo json_encode($pepe);
        break;
    default:
        header('Content-type: text/html');
        echo "<html><h1>" . $pepe->nombre . "</h1></html>";
        break;
}


?>
