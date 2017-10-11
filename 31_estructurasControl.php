<h1>Hola</h1>
<?php
$usuario_ok = true;
?>
<?php if ($usuario_ok) {
  echo "<p>Usuario registrado</p>";
} else {
  echo "<p>Usuario no válido</p>";
}
?>

<?php if ($usuario_ok) :?>
<p>Usuario registrado</p>
<?php else: ?>
<p>Usuario no válido</p>
<?php endif ?>
