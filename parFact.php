<?php

class ParFact {
    function par($x) {
        return $x % 2 == 0;
    }
    function fact($x) {
        if ($x < 0)
            throw new Exception ( "Valor negativo" );
        if ($x == 0)
            return 1;
        return $x * $this->fact ( $x - 1 );
    }
}
