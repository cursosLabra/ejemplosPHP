<?php
$count = 20;
$error = false;
for ($i = 0; $i < $count; $i++) {
    echo "Iteración $i\n";
    if ($i == 5) $error = true;
    if ($error) {
        goto finalizar;
    }
}

finalizar:
// sentencias...
 echo "Hubo un error\n";
