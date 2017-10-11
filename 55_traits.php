<?php

trait Saludador {
    function saluda($nombre) {
        echo "Hola $nombre! soy un " .
            get_class($this) . "\n";
    }
}

class Coche {
    use Saludador;
    // ...
}

class Lápiz {
    use Saludador;
    // ...
}

$c = new Coche;
$a = new Lápiz;
$c->saluda("Pepe"); // Hola Pepe! soy un Coche
$a->saluda("Juan"); // Hola Juan! soy un Lápiz
