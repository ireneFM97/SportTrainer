
 <?php

/*$email = $_POST['email'];

// Datos para el correo
$destinatario = "sportrainer@outlook.es";
$asunto = "¡Te confirmamos que hemos recibido tu correo!";
$mensaje = "En breve nuestro equipo se pondrá en contacto contigo lo antes posible! <br> ¡Muchas gracias por tu paciencia!";

// Enviando Mensaje
mail($destinatario, $asunto, $mensaje); 
*/

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
    $mail->Username   = 'practicaswebccc@gmail.com';    // Pones tu clave y usuario               
    $mail->Password   = '44';                               
    $mail->SMTPSecure = 'ssl';            
    $mail->Port       = 587;                            // Puerto que tiene gmail    

    // Remitente y destinatario
    $mail->setFrom('practicaswebccc@gmail.com', 'Atención al cliente'); // Poner el correo y el usuario
    $mail->addAddress($mailTo, 'irene');                            // Email donde se envía la información

    // Contenido
    $mail->isHTML(true);                                  // Lo envía en formato HTML
    $mail->CharSet = 'UTF-8';                             // Establece la codificación de caracteres
    $mail->Subject = '¡Te confirmamos que hemos recibido tu correo!'; // El asunto del correo
    $mail->Body    = 'En breve nuestro equipo se pondrá en contacto contigo lo antes posible! <br> ¡Muchas gracias por tu paciencia!'; // El cuerpo del correo

    $mail->send();
    echo 'El mensaje se envió correctamente';
} catch (Exception $e) {
    echo "No se ha podido enviar: {$mail->ErrorInfo}";
}
?>
