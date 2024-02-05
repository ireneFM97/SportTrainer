<?php
//Establece la conexión entre el servidor y la base de datos
try {
    $pdo = new PDO("mysql:host=localhost; dbname=sportrainer", "root", "admin");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa <br>";
} catch (PDOException $e) {
    echo "Error " . $e->getMessage() . "<br>";
    die();
}
?>