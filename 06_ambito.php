<?php

$x = 1;            // variable global

function f() {
    $x = 2 ;         // variable local
}

f();
echo $x;          // imprime 1
