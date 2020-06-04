<?php

$nombre = $_POST("nombre");
$asunto = $_POST("subject");
$email = $_POST("email");
$mensaje = $_POST("mesage");

$msg = "nombre:" . $nombre ." email:" . $email. "mensaje:". $mensaje."";


mail ( "enrique.gonzalez.de.vallejo@gmail.com" ,  $asunto ,  $msg);
header("Location: https://enrique-g.github.io");