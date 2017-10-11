<?php

$edad = 21;        // $edad es entera
var_dump($edad);

$edad = "Joven";   // $edad es String
var_dump($edad);

$n = 10;            // $n es integer
$b = (boolean) $n;  // $b es boolean

var_dump($b);

echo gettype($b) . "\n";

if (is_string($edad)) { echo "\$edad es string"; }
