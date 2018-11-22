<html>
<head>
    <title>Hola</title>
</head>
<body>
<h1>Saludos</h1>
<p>Fecha: <?= date("d.m.y")?></p>
<?php
if (date ("d") % 2 == 0) {
    echo "Hoy es un día par";
} else {
    echo "Hoy es un día impar";
}
?>
</body>
</html>
