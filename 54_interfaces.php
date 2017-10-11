<?php

interface a {
    function a();
}

interface b {
    function b();
}

class AB implements a, b {
    function a() { echo "AB implementa a\n"; }
    function b() { echo "AB implementa b\n"; }
}

$ab = new AB();
$ab->a();
$ab->b();