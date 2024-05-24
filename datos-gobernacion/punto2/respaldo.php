<?php
define('DB_HOST','dpg-cp77rb63e1ms73ag3t10-a.oregon-postgres.render.com' );
define('DB_NAME','usuarios_tf7j' );

define('DB_USER','usuarios_tf7j_user');
define('DB_PASS','AtY3X1qY0cph88wPDC8lkUac91NkArTZ' );


$respaldo= 'bakup_' . date('Y-m-d_H-i-s') . '.sql';

$comando = "PGPASSWORD=\"$DB_PASS\" pg_dump --host=$DB_HOST --username=$DB_USER --dbname=$DB_NAME --no-password > $backupFolder$respaldo";
exec ($comando,$output, $returnCode);

if ($returnCode === 0) {
    echo "Copia de seguridad creada $backupFile";
} else {
    echo "Error al crear la copia de seguridad: " . implode("\n", $output);
}