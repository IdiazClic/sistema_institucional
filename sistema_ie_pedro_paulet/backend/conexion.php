<?php
$host = "localhost";
$user = "root";
$password = "Ksbd2025!";
$db = "ie_pedro_paulet";

$conexion = new mysqli($host, $user, $password, $db);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
