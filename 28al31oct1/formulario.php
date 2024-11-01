<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    echo "Hola, " . htmlspecialchars($nombre);
}
?>

<form method="post" action="">
    <input type="text" name="nombre" placeholder="Ingresa tu nombre">
    <button type="submit">Enviar</button>
</form>
