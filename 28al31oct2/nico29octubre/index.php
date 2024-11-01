<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Bonito</title>
    <link rel="stylesheet" href="css">
</head>
<body>
    <div class="form-container">
        <h2>Formulario de Registro</h2>
        <form action="conexion.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>

            <label for="cedula">Cédula:</label>
            <input type="text" id="cedula" name="cedula" required>

            <button type="submit">Enviar</button>
        </form>
    </div>
    <div class="form-container1">
    <form action="conexion.php" method="get">
        </form>
    </div>
</body>
</html>
