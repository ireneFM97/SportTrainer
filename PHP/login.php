<?php
session_start();
include "conexion.php";

    $correo = $_POST["correo"];
    $contrasenia = $_POST["contrasenia"];

    if ($correo == "" || $contrasenia == "") {
        header('Location: ../HTML/loginRegistro.php');
    } else {
        $selectValidar = "SELECT * FROM usuarios WHERE email = '$correo' AND contrasenia = '$contrasenia'";
        $resultadoValidar = $pdo->query($selectValidar);
        $validarDB = $resultadoValidar->fetchColumn();

        if ($validarDB) {
            $_SESSION['emailUsuario'] = $correo;

            $selectNombre = "SELECT nombre FROM usuarios WHERE email = '$correo'";
            $resultadoNombre = $pdo->query($selectNombre);
            $nombreUsuario = $resultadoNombre->fetchColumn();
            $_SESSION['nombreUsuario'] = $nombreUsuario;

            $selectApellidos = "SELECT apellidos FROM usuarios WHERE email = '$correo'";
            $resultadoApellidos = $pdo->query($selectApellidos);
            $apellidosUsuario = $resultadoApellidos->fetchColumn();
            $_SESSION['apellidosUsuario'] = $apellidosUsuario;

            $respuestaLogin = array('success' => true, 'messageLogin' => '¡Inicio de sesión exitosa!');
            echo json_encode($respuestaLogin);
            
        } else {
            $respuestaLogin = array('success' => false, 'messageLogin' => 'Email o contraseña incorrectos');
            echo json_encode($respuestaLogin);
        }
    }