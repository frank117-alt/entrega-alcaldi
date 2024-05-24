<?php



define('DB_HOST','dpg-cp77rb63e1ms73ag3t10-a.oregon-postgres.render.com' );
define('DB_NAME','usuarios_tf7j' );

define('DB_USER','usuarios_tf7j_user');
define('DB_PASS','AtY3X1qY0cph88wPDC8lkUac91NkArTZ' );
;

try{
    $con = 'pgsql:host='. DB_HOST . ';dbname='. DB_NAME;
    $options = Array(

    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //  errores 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //  obtener  datos
   
);
    $pdo = new PDO($con, DB_USER, DB_PASS,$options);
    echo "conectado";

     // se abre el archivo sentencias.sql y se verifica si existe

    $sql =  file_get_contents("sentencia.sql");
        if($sql ==false){
        throw new Exception('error del archivo sql');}
     $pdo->exec($sql);
     echo "Base de datos y tablas de usuarios listas";


}

catch( PDOException $error ){
        echo("error" . $error->getMessage());

}
catch (Exception $error) {
    die($error->getMessage());
}

?>