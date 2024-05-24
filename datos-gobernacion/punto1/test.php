<?php
require 'conexion.php';

try {
    // Consulta para seleccionar todos los registros de la tabla usuario
    $sql = "SELECT * FROM usuario";
    $stmt = $pdo->query($sql);

    // Verificar si se encontraron registros
    if ($stmt->rowCount() > 0) {
        echo "<h2>Registros en la tabla usuario:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Contraseña</th></tr>";

        // Mostrar cada registro como una fila en la tabla
        while ($row = $stmt->fetch()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['contrasena'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron registros en la tabla usuario.";
    }
} catch (PDOException $e) {
    echo "Error al mostrar los registros: " . $e->getMessage();
}
?>
