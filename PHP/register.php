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
            $response = array('success' => false, 'message' => 'Ya estas registrado con este email. Inicia sesion');
            echo json_encode($response);
    } else {
        $selectUsuario = "SELECT usuario FROM usuarios WHERE usuario = '$usuario'";
        $resultadoUsuario = $pdo->query($selectUsuario);
        $usuarioDB = $resultadoUsuario->fetchColumn();

        if ($usuario == $usuarioDB){
            $response = array('success' => false, 'message' => 'No esta disponible este nombre de usuario. Sigue intentando');
            echo json_encode($response);
        } else {
            $insert = $pdo->prepare("INSERT INTO usuarios (nombre, apellidos, usuario, email, contrasenia) VALUES (?,?,?,?,?)");
    
            $insert->bindParam(1, $nombre);
            $insert->bindParam(2, $apellidos);
            $insert->bindParam(3, $usuario);
            $insert->bindParam(4, $correo);
            $insert->bindParam(5, $contrasenia);
    
            $insert->execute();
    
            if ($insert) {
                $response = array('success' => true, 'message' => '¡Te has registrado correctamente!. Inicia sesion');
                echo json_encode($response);
            } else {
                $response = array('success' => false, 'message' => 'Registro fallido, intentelo de nuevo');
                echo json_encode($response);
            }
        }
    }
    
    $pdo = null;
    
?>