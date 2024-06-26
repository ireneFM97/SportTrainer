<?php 

    session_start();
    if (!isset($_SESSION['emailUsuario'])) {
        echo "
        <script>
            alert('Debes iniciar sesion');
        </script>
        ";
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Sport Trainer</title>
    <link rel="stylesheet" href="../CSS/styles.css">
    <!--<link rel="stylesheet" href="../CSS/prueba.css">-->
    <link rel="stylesheet" href="../CSS/normalize.css">
    <link rel="icon" href="../assets/logo.png" type="image/x-icon">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;500;700;900&display=swap" rel="stylesheet">
    
</head>

<body>
    <section class="c-container">
        <!-----------------------HEADER------------------------------------------------------------------------->
        <header class="c-header">
            <!--------------------HEADER NAVEGACIÓN------------------------------------->
            <nav>
                <span class="material-symbols-outlined menu">menu</span>
                <div class="opciones-menu">
                    <a href="./home.php" class="nav-link">Inicio</a>
                    <a href="./nosotros.php" class="nav-link">Nosotros</a>
                    <a href="./servicios.php" class="nav-link">Servicios</a>
                    <a href="./contacto.php" class="nav-link activo">Contacto</a>
                </div>
                <div class="logo">
                    <a href="./home.php"><img src="../assets/logo.PNG" alt="logotipo"></a>
                </div>
                <div class="barra">
                    <a href="./home.php" class="nav-link">Inicio</a>
                    <a href="./nosotros.php" class="nav-link">Nosotros</a>
                    <a href="./servicios.php" class="nav-link">Servicios</a>
                    <a href="./contacto.php" class="nav-link activo">Contacto</a>
                </div>
                <div class="container-usuario">
                    <span class="material-symbols-outlined icon-user" id="icono-opciones">account_circle</span>
                    <div class="container-opciones">
                        <div class="usuario-opciones">
                            <img class="img-usuario" src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                                alt="imagen de perfil del usuario">
                            <div>
                                <h5 id="nombre-usuario">
                                    <?php
                                        echo $_SESSION['nombreUsuario'] . " " . $_SESSION['apellidosUsuario'];
                                    ?>
                                </h5>
                                <p>
                                    <?php
                                        echo $_SESSION["emailUsuario"];
                                    ?>
                                </p>
                            </div>

                        </div>
                        <div class="container-lista">
                            <span class="material-symbols-outlined">person</span>
                            <a href="#" data-section="options" data-value="option1">Perfil</a>
                        </div>
                        <div class="container-lista">
                            <span class="material-symbols-outlined">settings</span>
                            <a href="#" data-section="options" data-value="option2">Configuración</a>
                        </div>

                        <a class="cerrar-sesion" href="../PHP/cerrarSesion.php" data-section="options"
                            data-value="option3">Cerrar sesión</a>
                    </div>
                </div>
            </nav>
            <!--------------------FIN HEADER NAVEGACIÓN------------------------------------->
            <!--------------------HEADER ABAJO------------------------------------->
            <div class="header-abajo">
            </div>
            <!--------------------FIN HEADER ABAJO------------------------------------->
        </header>
        <!-----------------------FIN  HEADER------------------------------------------------------------------------->
        <!---------------------------INICIO CONTENIDO------------------------------------------->
        <main class="c-main">
            <section class="seccion-eslogan">
                <div class="box-letras">
                    <p class="texto-contacto">¿Donde estamos?</p>
                </div>
            </section>
                <div class="datos-formulario">
                    <div class="datos-mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.4200338386045!2d-3.6979478235714023!3d40.44383945398825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228fa7e411c07%3A0xd1d76841c0c4ee99!2sC%2F%20de%20Agust%C3%ADn%20de%20Betancourt%2C%2013%2C%20Chamber%C3%AD%2C%2028003%20Madrid!5e0!3m2!1sen!2ses!4v1705243637088!5m2!1sen!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p>DATOS DE CONTACTO</p>
                        <div>
                            <span class="material-symbols-outlined icono-contacto-main">location_on</span>
                            <p>C/ de Agustín de Betancourt, 13 28003 Madrid</p>
                        </div>
                        <div>
                            <span class="material-symbols-outlined icono-contacto-main">call</span>
                            <a href="tel:+1234567890">915 392 111</a>
                        </div>
                        <div>
                            <span class="material-symbols-outlined icono-contacto-main">mail</span>
                            <a href="mailto:correo@example.com">info@sportrainer.com</a>
                        </div>
                    </div>

                    <div class="container-formulario">
                        <p class="titulo">¿Tienes alguna duda?</p>
                        <form class="fomulario" method="post" action="../PHP/email.php">
                            <div class="grupo-input">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" name="email" id="emailCorreo1" placeholder="Ej: ejemplo@ejemplo.es">
                            </div>
                            <div class="grupo-input">
                                <textarea name="consulta" id="consulta" class="input-textarea" cols="30" rows="5" placeholder="Escribe tu consulta aquí"></textarea>
                            </div>
                            <button class="boton">
                                <span class="contenido-boton">Envíar </span>
                              </button>
                        </form>
                    </div>
                </div>

        </main>
        <!----------------------------------------------------FIN DEL CONTENIDO------------------------------------------------>
        <!------------------------------------------------INICIO DEL FOOTER----------------------------------------------------->
        <footer class="c-footer">
            <p class="frase-footer">"No pienso en los límites, <span>no hay nada imposible"</span>
            </p>
            <p class="autor"><span>USAIN </span>BOLT</p>
        </footer>
    </section>
</body>


<script src="../JS/home.js"></script>
<script src="../JS/contacto.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>