<?php

$lista = array("pepe","federico","juan","ana");

$filtro = array_filter($lista,
    function($n) { return (strlen($n) == 4); });
// pepe, juan

var_dump($filtro);