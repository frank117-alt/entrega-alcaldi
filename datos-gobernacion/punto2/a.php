<?php
require 'connection.php';

try {
    // Verificar si la tabla usuario existe
    $stmt = $pdo->query("SELECT * FROM usuario LIMIT 1");
    $usuarioExists = ($stmt !== false);

    if ($usuarioExists) {
        echo "La tabla usuario existe.<br>";

        // Verificar si hay datos en la tabla usuario
        $stmt = $pdo->query("SELECT COUNT(*) FROM usuario");
        $rowCount = $stmt->fetchColumn();

        if ($rowCount > 0) {
            echo "La tabla usuario contiene $rowCount registros.<br>";
        } else {
            echo "La tabla usuario está vacía.<br>";
        }
    } else {
        echo "La tabla usuario no existe.<br>";
    }

    // Puedes agregar más comprobaciones para otras tablas si es necesario

} catch (PDOException $e) {
    echo "Error al verificar las tablas: " . $e->getMessage();
}
?>
