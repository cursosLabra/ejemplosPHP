<?php

$alumnos = Array();
if (isset($_SERVER['PATH_INFO'])) {
    $request = explode('/', trim($_SERVER['PATH_INFO'],'/'))[0];
} else {
    $request = null;
}

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        if ($request)
            echo "GET $request";
        else
            echo "GET all";
    break;
    case "PUT":
        echo "PUT";
    break;
    case "POST":
        echo "POST";
    break;
    case "DELETE":
        echo "DELETE";
    break;
}

?>
