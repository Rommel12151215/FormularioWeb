<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola</h1>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST["name"];
   $email = $_POST["email"];
   $message = $_POST["message"];

   $to = "tu_correo@dominio.com";
   $subject = "Nuevo mensaje desde el formulario de contacto";
   $body = "Nombre: $name\nCorreo: $email\nMensaje: $message";

   if (mail($to, $subject, $body)) {
       echo "Mensaje enviado con éxito";
   } else {
       echo "Error al enviar el mensaje";
   }
}
?>
