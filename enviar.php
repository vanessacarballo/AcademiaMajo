<?php
$nombre= $_POST ['nombreyapellido'];
$mail= $_POST ['email'];
$mensaje= $_POST ['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = 'Este mensaje fue enviado por' . $nombre . " \r\n";
$mensaje .= "Su email es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . "\r\n";

$para= 'vanne09_cba@hotmail.com';
$asunto= 'Academa Majo';

mail($para, $asunto, utf8_decode ($mensaje), $header)

header(location:'contacto.html');

?>