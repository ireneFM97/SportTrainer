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
            $respuestaRegistro = array('success' => false, 'message' => 'Este email ya existe. Inicia sesion');
            echo json_encode($respuestaRegistro);
    } else {
        $selectUsuario = "SELECT usuario FROM usuarios WHERE usuario = '$usuario'";
        $resultadoUsuario = $pdo->query($selectUsuario);
        $usuarioDB = $resultadoUsuario->fetchColumn();

        if ($usuario == $usuarioDB){
            $respuestaRegistro = array('success' => false, 'message' => 'Nombre de usuario no disponible. Sigue intentandolo');
            echo json_encode($respuestaRegistro);
        } else {
            $insert = $pdo->prepare("INSERT INTO usuarios (nombre, apellidos, usuario, email, contrasenia) VALUES (?,?,?,?,?)");
    
            $insert->bindParam(1, $nombre);
            $insert->bindParam(2, $apellidos);
            $insert->bindParam(3, $usuario);
            $insert->bindParam(4, $correo);
            $insert->bindParam(5, $contrasenia);
    
            $insert->execute();
    
            if ($insert) {
                $respuestaRegistro = array('success' => true, 'message' => '¡Te has registrado correctamente!. Inicia sesion');
                echo json_encode($respuestaRegistro);
            } else {
                $respuestaRegistro = array('success' => false, 'message' => 'Registro fallido, intentelo de nuevo');
                echo json_encode($respuestaRegistro);
            }
        }
    }
    
    $pdo = null;
    
?>