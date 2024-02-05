<?php
session_start();
include "conexion.php";

    $correo = $_POST["correo"];
    $contrasenia = $_POST["contrasenia"];

    if ($correo == "" || $contrasenia == "") {
        header('Location: ../HTML/loginRegistro.html');
    } else {
        $selectValidar = "SELECT * FROM usuarios WHERE email = '$correo' AND contrasenia = '$contrasenia'";
        $resultadoValidar = $pdo->query($selectValidar);
        $validarDB = $resultadoValidar->fetchColumn();

        if ($validarDB) {
            header('Location: ../HTML/home.html');
        } else {
            echo "Error";
        }
    }