<?php

$matriz = array(array(4,5),
    array(8,2),
    array(3,6));

for ($i = 0; $i < count($matriz); $i++) {
    $fila = $matriz[$i];
    for ($j = 0; $j < count($fila); $j++) {
        echo "($i,$j)=$fila[$j] ";
    }
    echo "\n";
}
