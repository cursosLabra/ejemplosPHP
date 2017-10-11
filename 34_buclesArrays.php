<?php

$lista = array(1,2,3,4,5);
foreach($lista as $valor) {
    echo "$valor ";
}

echo "\n";

$lista = array("ana" => 4, "mar" => 7, "luis" => 2);
foreach($lista as $clave=>$valor) {
    echo "$clave tiene un $valor\n";
}
