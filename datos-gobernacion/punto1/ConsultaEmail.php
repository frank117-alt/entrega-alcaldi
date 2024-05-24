<?php
require ("conexion.php");


function Consulta($Email){
    global $pdo;
    try{

        $sql =  "select Nombre FROM usuario WHERE Email= :Email";
         $consulta = $pdo->prepare($sql);
         $consulta->execute([':Email' => $Email]);
         $r = $consulta->fetch();
         if ($r){
            return $r['nombre'];
         }
         else{
            return null;
         }

    }
    catch(PDOException $erro){
     die("error consulta" . $erro->getMesage());
    }
    
}
