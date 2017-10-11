<?php

function factorial($num) {
    if ($num == 0)
        return 1;
    elseif ($num > 0)
        return $num * factorial($num - 1);
    else
        throw new Exception ( "Argumento negativo" );
}

echo Factorial(5); // 120
