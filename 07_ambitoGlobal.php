<?php

$x = 1;
function f() {
    global $x ;    // $x se refiere a la x externa
    $x = 2 ;
}

f();
echo $x;         // imprime 2

echo "\n";
echo $GLOBALS["x"];