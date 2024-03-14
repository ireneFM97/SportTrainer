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
    <title>Nosotros | Sport Trainer</title>
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
    <section class="n-container">
        <!-----------------------HEADER------------------------------------------------------>
        <header class="n-header">
            <!--------------------HEADER NAVEGACIÓN------------------------------------->
            <nav>
                <span class="material-symbols-outlined menu">menu</span>
                <div class="logo">
                    <a href="./home.php"><img src="../assets/logo.PNG" alt="logotipo"></a>
                </div>
                <div class="barra">
                    <a href="./home.php" class="nav-link">Inicio</a>
                    <a href="./nosotros.php" class="nav-link activo">Nosotros</a>
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
        <main class="n-main">
            <section class="seccion-eslogan">
                <div class="box-letras">
                    <p class="titulo-eslogan">Conoce a nuestros entrenadores</p>
                </div>
            </section>
            <section class="n-seccion-tarjetas">
                <!--------------------------TARJETA 1-------------------------->
                <div class="n-tarjeta-izq">
                    <img class="foto" src="../assets/joel.jpg" alt="Imagen de Joel">
                    <div class="n-texto">
                        <h2>Joel Morente</h2>
                        <p>“Me enganché al running desde muy niño (3-4 años) con la carrera de mi pueblo (Cross Popular
                            Subida al Piélago). Me encantaba la sensación de correr rápido”.</p>

                        <p>“Desde los 10 años me recorría las carreras populares de todos los pueblos cercanos”.
                        </p>

                        <p>“Competí en varios campeonatos de España (Cross, pista…) durante mi adolescencia”.</p>

                        <p> “Después volví a engancharme al running y he vuelto a un peso competitivo de 62-64kg”.</p>

                        <p>“En la Maratón de NY corrí junto a Martin Fiz durante 8km… ahí tuve que bajar el ritmo
                            porque si no me iba a fundir antes de tiempo (Martin acabó en 2h34’ y yo en 2h45’)”.
                        </p>
                    </div>
                </div>
                <!--------------------------TARJETA 2-------------------------->
                <div class="n-tarjeta-der">
                    <img class="foto2" src="../assets/rebeca.jpg" alt="Imagen de Rebeca">
                    <div class="n-texto">
                        <h2>Rebeca Resino</h2>
                        <p>"Desde mi infancia, quedé fascinada por el mundo de la escalada. A muy temprana edad,
                            alrededor de los 5 o 6 años, experimenté la emoción de subir por las rocas de la montaña que
                            rodeaba mi pueblo"</p>

                        <p> "Durante mi adolescencia, la escalada se convirtió en una pasión inquebrantable. Participé
                            en competiciones locales y descubrí la sensación de alcanzar la cima después de enfrentarme
                            a rutas desafiantes".</p>

                        <p> "En Yosemite, enfrenté la icónica roca El Capitán. Compartir esas alturas con compañeros
                            escaladores creó lazos inquebrantables, tejidos por la confianza mutua".</p>

                        <p> "En la majestuosa Patagonia, donde el viento y la roca se entrelazan, exploré las agujas de
                            granito que desafían la gravedad".</p>
                    </div>
                </div>
                <!--------------------------TARJETA 3-------------------------->
                <div class="n-tarjeta-izq">
                    <img class="foto" src="../assets/eric.jpg" alt="Imagen de Eric">
                    <div class="n-texto">
                        <h2>Eric Fernández</h2>
                        <p>“Desde pequeñito empecé a hacer ejercicio. Era un niño muy inquieto y no paraba de
                            moverme”.</p>

                        <p> “Ese mismo año corrí mi primera carrera popular, la media maratón de Madrid. Mi padre estaba
                            preparando la maratón y me convenció para correrla con él. Hice 1h45´”.</p>

                        <p>“A partir de ese momento el triatlón ha formado parte de mi vida siempre. Todos los años
                            hago 2-3 medios ironman, triatlones sprint, olímpico o duatlones”.</p>

                        <p>“También sigo haciendo muchas carreras populares de todas las distancias. Mi primera maratón
                            fue la maratón de New York, donde hice 3h09´. Mi segunda fue Valencia, donde tengo mi MMP,
                            2h50´”.</p>

                        <p>“Mi mejor marca de 10k lo hice en Laredo con 33´45´´”.</p>
                    </div>
                </div>
            </section>
        </main>
        <!----------------------------FIN DEL CONTENIDO------------------------------------>
        <!----------------------------------INICIO DEL FOOTER------------------------------------------>
        <footer class="n-footer">
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