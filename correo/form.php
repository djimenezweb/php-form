<?php
//Campos del formulario
    $name = $_POST['name'];

//Atributos del correo    
    $from = "info@djimenezweb.com";
    $to = "djimenezweb@gmail.com";
    $subject = "Checking PHP mail";
    $message = "El nombre del formulario es " . $name;
    $headers = "From:" . $from;


    @mail($to, $subject, $message, $headers);
    
    header('Location: index.html');
?>