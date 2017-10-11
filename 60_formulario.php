<html>
<head><title>Formulario</title></head>
<body>
<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') : ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>"
          method="POST">
        <label>Nombre:
            <input name="cliente"></label><br>
        <label>Correo electrónico:
            <input name="correo" type="email"></label><br>
        <button>Enviar</button>
    </form>
    <?php
elseif ($_SERVER['REQUEST_METHOD'] == 'POST') :
    echo "<h1>Hola {$_POST['cliente']}</h1>";
    echo "<p>Email: {$_POST['correo']}</p>";
else:
    die("Sólo se admiten peticiones GET y POST.");
endif ?>
</body>
</html>
