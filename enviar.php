<?php 

// Llamando a los campos
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$proyecto = $_POST['proyecto'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "delacruzjoako0902@gmail.com";
$asunto = "Contacto desde la web Portfolio";

$carta = "De: $nombre \n";
$carta .= "Correo: $email \n";
$carta .= "Proyecto: $proyecto \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensajeenviado.html')

?>