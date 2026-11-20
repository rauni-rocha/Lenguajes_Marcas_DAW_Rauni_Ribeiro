<?php
// Ejemplo sencillo: recibir datos de formularios.
$datos = $_POST;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos recibidos</title>
    <link rel="stylesheet" href="estilo_tabla1.css">
</head>
<body>
<h1>Datos del formulario</h1>
<?php if (count($datos) > 0) { ?>
<table>
    <tr><th>Campo</th><th>Valor</th></tr>
    <?php foreach ($datos as $campo => $valor) { ?>
        <tr><td><?php echo htmlspecialchars($campo); ?></td><td><?php echo htmlspecialchars($valor); ?></td></tr>
    <?php } ?>
</table>
<?php } else { ?>
<p>No se ha recibido ninguna información.</p>
<?php } ?>
<p><a href="index.html">Volver a los formularios</a></p>
</body>
</html>
