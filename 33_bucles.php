<?php

$total = 0;
$i = 1;
while ($i <= 10) {
    $total += $i;
    $i++;
}
echo "Bucle1: $total\n"; // 55

$total = 0;
$i = 1;
do {
    $total += $i;
    $i++;
} while ($i <= 10);
echo "Bucle2: $total\n"; // 55

$total = 0;
for ($i = 0; $i <= 10; $i++) {
    $total += $i;
}
echo "Bucle3: $total\n"; // 55
