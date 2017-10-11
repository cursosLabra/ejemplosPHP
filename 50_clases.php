<?php

class Persona {
    private $nombre, $edad;

    function __construct($nombre,$edad=0) {
        $this->nombre= $nombre;
        $this->edad  = $edad;
    }

    function envejecer() { $this->edad++; }

    function toString() {
        return $this->nombre . ': ' .
            $this->edad . ' años';
    }
}

$juan = new Persona("Juan",23);
$juan->envejecer();
echo $juan->toString();