<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Estilo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .message {
            padding: 15px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
            margin-top: 20px;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border: 1px solid #d6d8db;
            border-radius: 4px;
        }
    </style>
</head>


<body>
<div class="container">
    <h2>Formulario de Registro</h2>
    <form method="post" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>
        <label for="cedula">Cédula:</label>
        <input type="text" id="cedula" name="cedula" required><br>
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    // Configuración de la conexión
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "php";
    $conexion = new mysqli($server, $username, $password, $database);
    // Verificación de conexión
    if ($conexion->connect_errno) {
        die("Conexión fallida: " . $conexion->connect_error);
    }
    // Procesamiento de formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];
        $telefono = $_POST['telefono'];
        // Inserción en la base de datos
        $sql = "INSERT INTO registro (nombre, apellido, cedula, telefono) VALUES (?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("ssss", $nombre, $apellido, $cedula, $telefono);

        if ($stmt->execute()) {
            echo "<div class='message'>Datos guardados correctamente.</div>";
            echo "<div class='result'>";
            echo "<strong>Datos Ingresados:</strong><br>";
            echo "Nombre: $nombre<br>";
            echo "Apellido: $apellido<br>";
            echo "Cédula: $cedula<br>";
            echo "Teléfono: $telefono<br>";
            echo "</div>";
        } else {
            echo "<div class='message' style='background-color: #f8d7da; color: #721c24; border-color: #f5c6cb;'>Error: " . $stmt->error . "</div>";
        }
        // Cerrar statement y conexión
        $stmt->close();
        $conexion->close();
    }
    ?>
</div>
</body>
</html>