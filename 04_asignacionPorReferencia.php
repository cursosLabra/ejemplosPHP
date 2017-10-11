<?php

$x = 1 ;
$r = & $x;  // r es una referencia a x
$x = 2 ;    // cambia el valor de x
echo $r;    // imprime 2
