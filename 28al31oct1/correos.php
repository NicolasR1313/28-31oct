<?php
$para = "correo@ejemplo.com";
$asunto = "Correo de Prueba";
$mensaje = "Hola, este es un correo de prueba enviado desde PHP.";
$cabeceras = "From: remitente@ejemplo.com";

if (mail($para, $asunto, $mensaje, $cabeceras)) {
    echo "Correo enviado exitosamente";
} else {
    echo "Error al enviar el correo";
}
?>