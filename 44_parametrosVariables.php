<?php

function sumaArgumentos() {
    $suma = 0;
    for ($i = 0; $i < func_num_args(); $i++) {
        $suma += func_get_arg($i);
    }
    return $suma;
}
echo sumaArgumentos(1, 5, 9) . "\n"; // 15
echo sumaArgumentos(1, 5) . "\n";    // 6
echo sumaArgumentos() . "\n";        // 0
