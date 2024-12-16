<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $to = 'buendiabarrosgregory@gmail.com';
    $subject = 'Nuevo mensaje de contacto';
    $body = "Nombre: $nombre\nCorreo: $correo\nMensaje:\n$mensaje";
    $headers = "From: $correo\r\n";

    // Verificar si el correo es válido
    if (filter_var($correo, FILTER_VALIDATE_EMAIL) === false) {
        die("El correo electrónico no es válido.");
    }

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        // Capturar error en el envío
        $error = error_get_last();
        echo "Error al enviar el mensaje: " . $error['message'];
    }
}
?>
