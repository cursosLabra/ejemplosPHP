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

class Empleado extends Persona {
    private $empresa;

    function __construct($nombre,$edad,$empresa) {
        parent::__construct($nombre,$edad);
        $this->empresa = $empresa;
    }
}

$personas = array(
    new Persona("Pepe",22),
    new Empleado("Luis",34,"IBM")
);

foreach ($personas as $p) $p->envejecer();

foreach ($personas as $p) echo $p->toString() . "\n";
