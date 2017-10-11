<?php

$nota    = array("juan" => 5.5, "luis" => 8.5);

echo $nota['luis'] . "\n";   // 8.5

foreach($nota as $p => $n) {
    echo "$p tiene un $n\n";
}
