<?php

$pepe = json_decode('{ "id": 23, "nombre": "Pepe", "edad": 34 }');

$pepe->edad++;

echo json_encode($pepe); // {"id":23,"nombre":"Pepe","edad":35}

