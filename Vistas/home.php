
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
    <title>Inicio | Sport Trainer</title>
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/normalize.css">
    <link rel="icon" href="../assets/logo.png" type="image/x-icon">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <section class="container">
        <!-----------------------HEADER------------------------------------------------------------------------->
        <header>
            <!--------------------HEADER NAVEGACIÓN------------------------------------->
            <nav>
                <span class="material-symbols-outlined menu">menu</span>
                <div class="opciones-menu">
                    <a href="./home.php" class="nav-link activo">Inicio</a>
                    <a href="./nosotros.php" class="nav-link">Nosotros</a>
                    <a href="./servicios.php" class="nav-link">Servicios</a>
                    <a href="./contacto.php" class="nav-link">Contacto</a>
                </div>
                <div class="logo">
                    <a href="./home.php"><img src="../assets/logo.PNG" alt="logotipo"></a>
                </div>
                <div class="barra">
                    <a href="./home.php" class="nav-link activo">Inicio</a>
                    <a href="./nosotros.php" class="nav-link">Nosotros</a>
                    <a href="./servicios.php" class="nav-link">Servicios</a>
                    <a href="./contacto.php" class="nav-link">Contacto</a>
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
        <main class="main">
            <section class="seccion-eslogan">
                <div class="box-letras">
                    <p class="titulo-eslogan">Descubre la libertad en cada zancada y desafía tus límites</p>
                    <p class="preparado">¿Estás preparado?</p>
                </div>
            </section>
            <section class="seccion-tarjetas">
                <div class="tarjeta1">
                    <img class="foto-encima" src="../assets/corredores.jpg" alt="corredores-retiro">
                    <div class="descripcion">

                        <h3 class="titulo-tarjeta">Grupo de corredores del retiro</h3>
                        <p class="texto-tarjeta">Únete a nuestro animado grupo de corredores del retiro, donde 15
                            entusiastas comparten la pasión
                            por
                            correr y disfrutar de la vida después del retiro.</p>

                            <p class="texto-tarjeta"> Realizamos 2 quedadas cada semana, creando vínculos y promoviendo la salud a través de
                            carreras
                            emocionantes y rutas pintorescas.</p>

                            <p class="texto-tarjeta">Todos son bienvenidos, desde principiantes hasta corredores experimentados. Celebramos
                            logros
                            individuales y colectivos con eventos especiales, construyendo una comunidad unida en torno
                            a
                            nuestra pasión compartida.</p>
                    </div>
                </div>
                <div class="tarjeta2">
                    <img class="foto-encima" src="../assets/corredoresSanSilvestre.jpg" alt="corredores-retiro">
                    <div class="descripcion">

                        <h3 class="titulo-tarjeta">Grupo de corredores Arturo Soria</h3>
                        <p class="texto-tarjeta">Cada año, nuestros apasionados corredores del Club de Corredores de
                            Arturo Soria anticipan con
                            entusiasmo la emblemática Carrera de la San Silvestre. Más de 400 miembros fuertes,
                            impregnados
                            del espíritu festivo, se lanzan a las calles, cerrando el año con salud y determinación.
                        </p>

                        <p class="texto-tarjeta">¡Te esperamos con los brazos abiertos en la línea de partida! Únete a la tradición, únete a
                            la
                            diversión, únete a la familia de corredores de Arturo Soria. ¡Nos vemos en la carrera!
                        </p>
                    </div>
                </div>
            </section>
        </main>
        <!----------------------------------------------------FIN DEL CONTENIDO------------------------------------------------>
        <!------------------------------------------------INICIO DEL FOOTER----------------------------------------------------->
        <footer class="footer">
            <section class="seccion-footer">
                <div class="logo-izquierda">
                    <img src="../assets/logo.png" alt="logotipo">
                </div>
                <div class="politicas">
                    <a href="#">Política de Privacidad</a>
                    <a href="#">Condiciones de uso</a>
                    <a href="#">Cookies</a>
                </div>
                <div class="rrss">
                    <a href="https://www.facebook.com" target="_blank">
                        <img src="../assets/facebook.png" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com" target="_blank">
                        <img src="../assets/instagram.png" alt="Instagram">
                    </a>
                    <a href="https://twitter.com/" target="_blank">
                        <img src="../assets/x.png" alt="X">
                    </a>
                </div>
            </section>
        </footer>
    </section>
</body>

<script src="../JS/home.js"></script>

</html>