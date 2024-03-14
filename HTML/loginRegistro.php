<?php

session_start();

if (isset($_SESSION['emailUsuario'])) {
    header('Location: home.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión | Sport Trainer</title>
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="../CSS/normalize.css">
    <link rel="icon" href="../assets/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="recuadro-login">
        <!-----------------------------------------INICIAR SESIÓN---------------------------------------------->
        <div class="formulario-box-login">
            <h2>Iniciar sesión</h2>
            <form action="../PHP/login.php" method="post" id="formulario-login">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <label>Email</label>
                    <input type="email"  name="correo" id="correo-login" autocomplete="off">
                    <p class="error" id="error-correo-login">Este campo no puede estar vacío</p>
                </div>
                <div class="input-box">
                    <span class="material-symbols-outlined icon icono-candado">
                        lock
                    </span>
                    <label>Contraseña</label>
                    <input type="password"  name="contrasenia" id="contrasenia-login" autocomplete="off">
                    <p class="error" id="error-contrasenia-login">Este campo no puede estar vacío</p>
                </div>
                <button type="submit" class="boton">Iniciar sesión</button>
                <div class="pregunta-registro">
                    <p>¿Aún no tienes cuenta?<a href="#" class="registro-link">Registrate!</a></p>
                </div>
            </form>
            <div class="error-servidor" id="error-login"></div>
        </div>

        <!--------------------------------------REGISTRO---------------------------------------------->

        <div class="formulario-box-registro">
            <h2>Registro</h2>
            <form action="../PHP/register.php" method="post" id="formulario-registro">
                <div class="input-box">
                    <label>Nombre</label>
                    <input type="text"  name="nombre" id="nombre" autocomplete="off">
                    <p class="error" id="error-nombre">Este campo no puede estar vacío</p>

                </div>
                <div class="input-box">
                    <label>Apellidos</label>
                    <input type="text"  name="apellidos" id="apellidos" autocomplete="off">
                    <p class="error" id="error-apellidos">Este campo no puede estar vacío</p>

                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <label>Usuario</label>
                    <input type="text"  name="usuario" id="usuario" autocomplete="off">
                    <p class="error" id="error-usuario">Este campo no puede estar vacío</p>

                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <label>Email</label>
                    <input type="email"  name="correo" id="correo" autocomplete="off">
                    <p class="error" id="error-correo">Este campo no puede estar vacío</p>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed" class="lock-closed"></ion-icon>
                    </span>
                    <label>Contraseña</label>
                    <input type="password"  name="contrasenia" id="contrasenia" autocomplete="off">
                    <p class="error" id="error-contrasenia">Este campo no puede estar vacío</p>
                </div>
                <button type="submit" class="boton" id="botonRegistro">Registrarse</button>
                <div class="pregunta-registro">
                    <p>¿Ya tienes cuenta?<a href="#" class="login-link">Inicia sesión!</a></p>
                </div>
            </form>
            <div class="error-servidor" id="error-registro"></div>
        </div>

    </div>
    <script src="../JS/login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>