<?php

$x = 1;            // variable global

function f(&$x) {
    $x = 2 ;         // variable local
    echo "Dentro de f, x=$x\n";
}

f($x);
echo "Fuera de f, x=$x\n";          // imprime 2
