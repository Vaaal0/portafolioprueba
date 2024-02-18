<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['user_name'];
    $correo = $_POST['user_mail'];
    $mensaje = $_POST['user_message'];

    // Destinatario y asunto
    $para = "dhanyaguil15@gmail.com";
    $asunto = "Nuevo mensaje de formulario";

    // Construir el mensaje
    $mensaje_completo = "Nombre: $nombre\n";
    $mensaje_completo .= "Correo electrónico: $correo\n";
    $mensaje_completo .= "Mensaje:\n$mensaje";

    // Cabeceras para el correo
    $cabeceras = "From: $correo";

    // Enviar el correo
    mail($para, $asunto, $mensaje_completo, $cabeceras);


	if(mail('tuEmail', $asunto, $mensaje)){
		echo "Correo enviado";
	}
}
?>
