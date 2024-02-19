<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar y limpiar los datos del formulario
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $mail = isset($_POST['mail']) ? filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    // Verificar si los datos obligatorios están presentes y son válidos
    if (!$name || !$mail || !$message) {
        echo "Por favor, completa todos los campos del formulario.";
        exit;
    }

    // Construir el mensaje
    $header = 'From: ' . $mail . "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $header .= "Mime-Version: 1.0\r\n";
    $header .= "Content-Type: text/plain; charset=utf-8\r\n";

    $message_body = "Este mensaje fue enviado por: " . $name . "\r\n";
    $message_body .= "Su e-mail es: " . $mail . "\r\n";
    $message_body .= "Mensaje: " . $message . "\r\n";
    $message_body .= "Enviado el: " . date('d/m/Y', time());

    // Enviar el correo
    $para = 'dhanyaguil15@gmail.com';
    $asunto = 'Mensaje de... (Página de portafolio)';

    if (mail($para, $asunto, utf8_decode($message_body), $header)) {
        echo "Correo enviado correctamente.";
    } else {
        echo "Error al enviar el correo.";
    }

    // Redirigir al usuario después de enviar el correo
    header("Location: index.html");
    exit;
}
?>
