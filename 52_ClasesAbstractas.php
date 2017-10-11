<?php

abstract class Figura {
    private $x, $y;

    function __construct($x, $y) {
        $this->x = $x; $this->y = $y;
    }

    abstract function area();

    function mover($dx,$dy) {
        $this->x+=$dx;
        $this->y+=$dy;
    }

}

class Circulo extends Figura {
    private $radio ;

    function __construct($radio,$x,$y) {
        parent::__construct($x,$y);
        $this->radio = $radio;
    }

    function area() {
        return pi() * pow($this->radio,2);
    }
}

$c1 = new Circulo(5,3,4);
echo $c1->area();

// Error: $f1 = new Figura(5,6);
// echo $f1->area();