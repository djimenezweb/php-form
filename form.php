<?php
// Campos del formulario
$name = $_POST['name'];
$mensaje = $_POST['mensaje'];

// Correo electrónico al que se envía el formulario
$from = "info@djimenezweb.com";
$to = "djimenezweb@gmail.com";
$subject = "Formulario enviado por correo";
$message = "Texto bla bla bla" . $name . "Y el mensaje es" . $mensaje;
$headers = "From:" . $from;

@mail($to, $subject, $message, $headers);
// A qué página se redirige una vez se ha enviado el formulario:
header('Location: index.html');
?>