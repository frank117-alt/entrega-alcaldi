<?php
require 'ConsultaEmail.php';

$Email = 'email2@gmail.com'; // Email de prueba
$nombre = Consulta($Email);

if ($nombre) {
    echo "El nombre del usuario con el email $Email es $nombre.";
} else {
    echo "No se encontró un usuario con el email $Email";
}
?>
