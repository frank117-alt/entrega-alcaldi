<?php

 require ('conexion.php');
 $nombre = 'prueba1';
 $nueva_pass = 'nueva15fffg43';
function ActualizarPass($nombre ,$nueva_pass){
    global $pdo;
try {

    $sql = "UPDATE usuario SET Contrasena= :nueva_pass  WHERE Nombre =:nombre";
    
    $consulta = $pdo->prepare($sql);
    $consulta->execute([':nueva_pass' => $nueva_pass,':nombre'=>$nombre]);
    if($consulta->rowCount()>0 ){
        echo "se actualizo";
    }
    else {
        echo "no se encontro al usuario". $nombre;
    }
}   
    
 catch (PDOException $error) {
    die("Error al actualizar la contraseña: " . $error->getMessage());
}

}
ActualizarPass($nombre, $nueva_pass);
