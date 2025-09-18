<?php
// PHP recibe los datos del formulario
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Feliz Cumpleaños!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="tarjeta">
        <h2>¡Feliz Cumpleaños, <?php echo htmlspecialchars($nombre); ?>!</h2>
        <p><?php echo nl2br(htmlspecialchars($mensaje)); ?></p>
        <p class="firma">Con mucho cariño.</p>
    </div>
</body>
</html>