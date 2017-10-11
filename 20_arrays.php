<?php

$personas = array("juan","luis","ana");

echo "$personas[1]\n";    // luis

$personas[3] = "pepe";   // Inserta un valor en posición 3
$personas[] = "kiko";    // Inserta valor al final

foreach($personas as $p) {
    echo $p . " ";
}
