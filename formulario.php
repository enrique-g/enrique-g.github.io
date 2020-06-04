<?php
var_dump($_POST);
die();

$nombre = $_POST("nombre");
$asunto = $_POST("subject");
$email = $_POST("email");
$mensaje = $_POST("mesage");

$msg = "nombre:" . $nombre ." email:" . $email. "mensaje:". $mensaje."";


$send = mail ( "enrique.gonzalez.de.vallejo@gmail.com" ,  $asunto ,  $msg);
if($send){
    echo "Email enviado";
} else{
    echo "Error al enviar el email";
}
// header("Location: https://enrique-g.github.io");