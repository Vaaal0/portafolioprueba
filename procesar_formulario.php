<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['user_name'];
    $correo = $_POST['user_mail'];
    $mensaje = $_POST['Message']; // Cambiado a 'Message' para que coincida con el name del campo

    // Destinatario y asunto
    $para = "dhanyaguil15@gmail.com"; // Cambiar por tu dirección de correo electrónico
    $asunto = "Nuevo mensaje de formulario";

    // Construir el mensaje
    $mensaje_completo = "Nombre: $nombre\n";
    $mensaje_completo .= "Correo electrónico: $correo\n";
    $mensaje_completo .= "Mensaje:\n$mensaje";

    // Cabeceras para el correo
    $cabeceras = "From: $correo";

    // Enviar el correo
    if (mail($para, $asunto, $mensaje_completo, $cabeceras)) {
        echo "Correo enviado";
    } else {
        echo "Error al enviar el correo";
    }
}
?>

