<?php
$destino = 'contacto@lorelicervantes.engineer';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$header = "From: noreply@example.com" . " \r\n";
$header .= "Reply-to: noreply@example.com" . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$contenido = "ASUNTO: " . $subject ."\nMensaje de: " . $name . "\nEmail: " . $email . "\nMensaje: " . $message . "\nFecha de envío: " . date('d/m/Y');

mail($destino, $subject, utf8_decode($contenido), $header);

header("Location: contact.html");
?>