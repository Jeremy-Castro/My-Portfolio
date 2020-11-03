<?php
$destino= 'jeremycastrojarama@gmail.com'
$email = $_POST['correo']

$contenido = 'Email: ' . $email;

mail($destino, 'Contacto', $contenido);
header('location:gracias.html');
?>
