<?php
require_once 'database.php';
$database = new Database();
$connection = $database->getConnection();

if ($connection) {
    echo "La conexión a la base de datos se realizó correctamente.";
} else {
    echo "No se pudo conectar a la base de datos.";
}
?>
