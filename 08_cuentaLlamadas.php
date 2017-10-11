<?php

$x = 10;

function cuentaLlamadas() {
    static $x = 0;
    $x++;
    echo "Llamada $x\n";
}

cuentaLlamadas();   // escribe Llamada 1
cuentaLlamadas();   // escribe Llamada 2
echo "$x\n";            // escribe 10
