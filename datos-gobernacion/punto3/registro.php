<?php

require('../punto1/conexion.php');
global $pdo;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $name = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    echo $name;
    echo $email;
    echo $password;
    $segura_pass= password_hash($password, PASSWORD_BCRYPT);
    // Validar los datos del formulario (se pueden agregar más validaciones)
    if (empty($name) || empty($email) || empty($password)) {
        echo "Todos los campos son obligatorios.";
        exit;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El email no es fallo.";
        exit;
    } elseif (strlen($password) < 6) {
        echo "La contraseña debe tener al menos 6 caracteres.";
        exit;
    }

   
    $sql = "INSERT INTO usuario (Nombre, Email, Contrasena) VALUES (:nombre, :email, :contrasena)";
    $consulta = $pdo->prepare($sql);
    $resultado =$consulta->execute([
        ':nombre' => $name,
        ':email' => $email,
        ':contrasena' => $segura_pass]);
     if($resultado){
        echo"registro exitoso";
        header('Location:dashboard.php');
        
     }
     else{
        echo "error de registro";
     }
    }
    
?>
