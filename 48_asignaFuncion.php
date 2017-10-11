<?php

$suma = function($a,$b) { return $a + $b; };

echo $suma(2,3) . "\n";

$suma3 = function($x) { return $x + 3 ;};

$aplica2 = function($f,$x) { return $f($f($x)); };

echo $aplica2($suma3,4) . "\n";

echo $aplica2(function($x) { return $x * $x; },5) . "\n";
