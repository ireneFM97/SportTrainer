<?php

    include "conexion.php";

    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $usuario = $_POST["usuario"];
    $correo = $_POST["correo"];
    $contrasenia = $_POST["contrasenia"];

    $selectEmail = "SELECT email FROM usuarios WHERE email = '$correo'";
    $resultadoEmail = $pdo->query($selectEmail);
    $emailDB = $resultadoEmail->fetchColumn();

    if ($nombre == "" || $apellidos == "" || $usuario == "" || $correo == "" || $contrasenia == "") {
        header('Location: ../HTML/loginRegistro.html');
    } else if ($correo == $emailDB) {
            echo "Este correo ya existe <br>";
    } else {
        $selectUsuario = "SELECT usuario FROM usuarios WHERE usuario = '$usuario'";
        $resultadoUsuario = $pdo->query($selectUsuario);
        $usuarioDB = $resultadoUsuario->fetchColumn();

        if ($usuario == $usuarioDB){
            echo "Este usuario ya existe <br>";
        } else {
            $insert = $pdo->prepare("INSERT INTO usuarios (nombre, apellidos, usuario, email, contrasenia) VALUES (?,?,?,?,?)");
    
            $insert->bindParam(1, $nombre);
            $insert->bindParam(2, $apellidos);
            $insert->bindParam(3, $usuario);
            $insert->bindParam(4, $correo);
            $insert->bindParam(5, $contrasenia);
    
            $insert->execute();
    
            if ($insert) {
                echo "Usuario registrado correctamente <br>";
            } else {
                echo "Algo ha ido mal, registrate de nuevo";
            }
        }
    }
    
    $pdo = null;
    
?>