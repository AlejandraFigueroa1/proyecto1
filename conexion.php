<?php

// validar recepcion de datos
$servername = "localhost";
$username = "root";
$password = "1234";
$db = "php-d12";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Coneccion fallida: ' . $e->getMessage();
}
?>