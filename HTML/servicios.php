<?php 

    session_start();
    if ($_SESSION['emailUsuario'] != null) {
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
    <title>Servicios | Sport Trainer</title>
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/normalize.css">
    <link rel="icon" href="../assets/logo.png" type="image/x-icon">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="s-body">
    <section class="s-container">
        <!-----------------------HEADER------------------------------------------------------>
        <header class="s-header">
            <!--------------------HEADER NAVEGACIÓN------------------------------------->
            <nav>
                <span class="material-symbols-outlined menu">menu</span>
                <div class="logo">
                    <a href="./home.php"><img src="../assets/logo.PNG" alt="logotipo"></a>
                </div>
                <div class="barra">
                    <a href="./home.php" class="nav-link">Inicio</a>
                    <a href="./nosotros.php" class="nav-link">Nosotros</a>
                    <a href="./servicios.php" class="nav-link activo">Servicios</a>
                    <a href="./contacto.php" class="nav-link">Contacto</a>
                </div>
                <div class="container-usuario">
                    <div class="container-bienvenida">
                        <p class="nombre-usuario">
                            <?php
                                echo $_SESSION['name'] . "!"; //para saber el nombre de usuario que está en esa sesión
                            ?>
                        </p>
                    </div>
                    <span class="material-symbols-outlined icon-user" id="icono-opciones">account_circle</span>
                    <div class="container-opciones">
                        <div class="usuario-opciones">
                            <img class="img-usuario" src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                                alt="imagen de perfil del usuario">
                            <div>
                                <h5>
                                    <?php
                                        echo $_SESSION['name'] . " " . $_SESSION['surnames'];
                                    ?>
                                </h5>
                                <p>
                                    <?php
                                        echo $_SESSION["userEmail"];
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

                        <a class="cerrar-sesion" href="php/close_session.php" data-section="options"
                            data-value="option3">Cerrar sesión</a>
                    </div>
                </div>
            </nav>
            <!--------------------FIN HEADER NAVEGACIÓN------------------------------------->
        </header>
        <!-----------------------FIN  HEADER------------------------------------------------------------------------->
        <!---------------------------INICIO CONTENIDO------------------------------------------->
        <main class="s-main">
            <!--------------------------TARJETA 1-------------------------->
            <section>
                <div class="s-tarjeta-superior">
                    <img src="../assets/runnerOscuro.jpg" alt="foto corredor">
                    <div class="s-descripcion-tarjeta">
                        <h2>GRUPOS DE RUNNING (TODOS LOS NIVELES)</h2>
                        <div class="s-linea"></div>
                        <p>Si quieres <strong>comenzar a correr</strong> o mejorar tu <strong>mejorar tu rendimiento</strong> en carrera aprovechándote del valor que aporta el entrenamiento en grupo, este es tu servicio. Nuestros grupos de running te ayudarán a disfrutar y mejorar tu carrera y salud sin perder la motivación:</p>
                        <ul>
                            <li><strong>Grupo de iniciación</strong></li>
                            <li><strong>Grupo de nivel Básico-Medio</strong></li>
                            <li><strong>Maratón & 1/2 Maratón</strong></li>
                            <li><strong>Grupo de Iniciación al Trail Running</strong></li>
                        </ul>
                        <p>Disfrutarás de entrenamientos <strong>variados</strong>, evitando la monotonía de tus sesiones de carrera. Y a su vez, <strong>conocerás gente y compartirás la diversión</strong> por hacer ejercicio en un entorno ameno y saludable.</p>
                    </div>
                </div>

                <div class="s-tarjeta-inferior">
                    <div class="s-card izq">
                        <div class="s-linea-vertical"></div>
                        <p><span>01</span> Te apetece compartir entrenamientos con otras <strong>personas</strong>,
                            para mejorar en cada entrenamiento.</p>
                    </div>
                    <div class="s-card">
                        <div class="s-linea-vertical"></div>
                        <p><span>02</span> Nunca has corrido y quieres, por fin, <strong>“engancharte”</strong> al running.</p>
                    </div>
                    <div class="s-card izq">
                        <div class="s-linea-vertical"></div>
                        <p><span>03</span> Ya eres corredor y buscas <strong>progresar</strong> mediante sesiones dirigidas por un profesional.</p>
                    </div>
                    <div class="s-card">
                        <div class="s-linea-vertical"></div>
                        <p><span>04</span> Evita la monotonía en tus sesiones de entrenamiento e introduce una gran <strong>variedad</strong> de rutinas.</p>
                    </div>
                </div>
            </section>
            <!--------------------------TARJETA 2-------------------------->
            <section>
                <div class="s-tarjeta-superior">
                    <img src="../assets/entrenadorPersonal.jpg" alt="foto de entrenador personal">
                    <div class="s-descripcion-tarjeta">
                        <h2>ENTRENAMIENTO PERSONAL</h2>
                        <div class="s-linea"></div>
                        <p>Si quieres conseguir un plus en tu <strong>rendimiento</strong>, o bien dar un <strong>cambio a tu vida</strong> y <strong>mejorar tu salud</strong>, este es tu servicio. Te ayudaremos y acompañaremos en todo momento, para conseguir, por fin, los resultados que tanto tiempo llevas soñando.</p>
                        <p>Tendrás un <strong>entrenamiento totalmente individualizado</strong>, controlado diariamente y cuidado al milímetro, teniendo en cuenta en todo momento tus necesidades, tus características y tu evolución.</p>
                        <p>Queremos que seas nuestro nuevo caso de éxito, y para ello, no te vamos a dejar sol@ en ningún momento.</p>
                        <p>Este servicio <strong>lo damos virtualmente a través de nuestras plataformas de skype, zoom, face time</strong>.</p>
                    </div>
                </div>

                <div class="s-tarjeta-inferior">
                    <div class="s-card izq">
                        <div class="s-linea-vertical"></div>
                        <p><span>01</span> Si quieres hacer del ejercicio físico un <strong>hábito</strong> de vida.</p>
                    </div>
                    <div class="s-card">
                        <div class="s-linea-vertical"></div>
                        <p><span>02</span> Si quieres conseguir un <strong>plus de rendimiento</strong> o hacer una preparación específica.</p>
                    </div>
                    <div class="s-card izq">
                        <div class="s-linea-vertical"></div>
                        <p><span>03</span> Si quieres invertir tu <strong>tiempo</strong> de la forma más óptima.</p>
                    </div>
                    <div class="s-card">
                        <div class="s-linea-vertical"></div>
                        <p><span>04</span> Si quieres conseguir los <strong>resultados</strong> de la forma más rápida y efectiva posible.</p>
                    </div>
                </div>
            </section>
            <!--------------------------TARJETA 3-------------------------->
            <section>
                <div class="s-tarjeta-superior">
                    <img src="../assets/nutricion.jpg" alt="foto de comida">
                    <div class="s-descripcion-tarjeta">
                        <h2>PROGRAMA DE NUTRICIÓN</h2>
                        <div class="s-linea"></div>
                        <p>Si quieres <strong>aprender</strong> a comer de manera saludable, variada y acorde a tus necesidades nutricionales y objetivos personales (pérdida de peso, ganancia muscular…) y deportivos (Running, triatlón, ciclismo…) con nuestro servicio de nutrición tendrás justo lo que necesitas.</p>
                        <p>Nuestro servicio consiste en un programa nutricional <strong>individualizado</strong> basado en la <strong>educación</strong>, preparación y adaptación nutricional tanto para la vida deportiva como para la vida diaria.</p>
                        <p>Tendrás un control exhaustivo por parte del <strong>nutricionista</strong> y todo ello coordinado al 100% con tu entrenador personal, haciendo un equipo multidisciplinar sin fisuras..</p>
                    </div>
                </div>

                <div class="s-tarjeta-inferior">
                    <div class="s-card izq">
                        <div class="s-linea-vertical"></div>
                        <p><span>01</span> Buscas un programa para aprender a comer saludable y acorde a tus necesidades.</p>
                    </div>
                    <div class="s-card">
                        <div class="s-linea-vertical"></div>
                        <p><span>02</span> Si quieres que este cambio de hábitos nutricionales perdure en el tiempo.</p>
                    </div>
                    <div class="s-card izq">
                        <div class="s-linea-vertical"></div>
                        <p><span>03</span> Quieres conseguir tu peso ideal de una forma controlada y saludable.</p>
                    </div>
                    <div class="s-card">
                        <div class="s-linea-vertical"></div>
                        <p><span>04</span> Quieres mejorar el rendimiento en tus objetivos de competiciones.</p>
                    </div>
                </div>
            </section>
        </main>
        <!----------------------------FIN DEL CONTENIDO------------------------------------>
        <!----------------------------------INICIO DEL FOOTER------------------------------------------>
        <footer class="s-footer">
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