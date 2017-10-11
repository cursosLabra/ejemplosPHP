<?php

function f2($x = "Juan") {
    echo "Hola $x\n" ;
}

f2("Luis"); // Hola Luis
f2();       // Hola Juan
