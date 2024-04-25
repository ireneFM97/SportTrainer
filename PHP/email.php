
 <?php

/*Implementación anterior (Ahora habría que contratar un plan de servidor SMTP
como por ejemplo SendGrid)*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Llamada a la librería
require '../assets/PHPMailer/src/Exception.php';
require '../assets/PHPMailer/src/PHPMailer.php';
require '../assets/PHPMailer/src/SMTP.php';

// Enviamos el correo
$mail = new PHPMailer(true);

// Configuración
try {
    $mailTo = $_POST['email']; // Obtener la dirección de correo electrónico del formulario
    $mail->SMTPDebug = 0;                      
    $mail->isSMTP();                                    // Para usar el SMTP                       
    $mail->Host       = 'smtp.gmail.com';               // Para decirle que estamos usando un gmail                
    $mail->SMTPAuth   = true;                                    
    $mail->Username   = 'irenemeneses97@gmail.com';    // Pones tu clave y usuario               
    $mail->Password   = '44';                               
    $mail->SMTPSecure = 'ssl';                             // Puerto que tiene gmail    

    // Remitente y destinatario
    $mail->setFrom('irenemeneses97@gmail.com', 'Atención al cliente'); // Poner el correo y el usuario
    $mail->addAddress($mailTo, 'irene');                            // Email donde se envía la información

    // Contenido
    $mail->isHTML(true);                                  // Lo envía en formato HTML
    $mail->CharSet = 'UTF-8';                             // Establece la codificación de caracteres
    $mail->Subject = '¡Te confirmamos que hemos recibido tu correo!'; // El asunto del correo
    $mail->Body    = 'En breve nuestro equipo se pondrá en contacto contigo lo antes posible! <br> ¡Muchas gracias por tu paciencia!'; // El cuerpo del correo

    $mail->send();

} catch (Exception $e) {
    header('Location: ../Vistas/contacto.php');
}

?>
