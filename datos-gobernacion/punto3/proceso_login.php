<?php

require('../punto1/conexion.php');
session_start();
global $pdo;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    
    // Validar los datos del formulario
    if (empty($email) || empty($password)) {
        echo "Todos los campos son obligatorios.";
        exit;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El email no es válido.";
        exit;
    }

    


   
$sql = "SELECT * FROM usuario WHERE Email =:email";
    $consulta = $pdo->prepare($sql);
    $resultado =$consulta->execute([':email' => $email]);
    $datos_user = $consulta->fetch(PDO::FETCH_ASSOC);
     if($datos_user && password_verify($password,$datos_user['contrasena'])){
      
          // Iniciar sesión y redirigir a dashboard.php
          $_SESSION['user_id'] = $datos_user['id'];
          $_SESSION['user_name'] =$datos_user['nombre'];
          header("Location: dashboard.php");
          exit();
      } else {
          echo "Email o contraseña incorrectos.";
      }
     
}
?>

