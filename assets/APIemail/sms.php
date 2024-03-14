<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

$patronTelefono = '/^[67]\d{8}$/';
$telefono = $_POST['telefono'];
$consulta = $_POST['consulta'];

if (empty($telefono) || empty($consulta)) {
    echo "Níngun campo debe de estar vacio";
} else {

    if (preg_match($patronTelefono, $telefono)) {
        // Your Account SID and Auth Token from twilio.com/console
        // To set up environmental variables, see http://twil.io/secure
        $account_sid = 'AC79a1ec6660a83f454245305aee0a6e44';
        $auth_token = '579ce85bff2d6adcebb6eb2973719082';
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

        // A Twilio number you own with SMS capabilities
        $twilio_number = "+13016850386";

        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
            // Where to send a text message (your cell phone?)
          '+34'. $telefono ,
            array(
                'from' => $twilio_number,
                'body' => 'Muchas gracias por confiar en Sport Trainer! en unos segundos uno de nuestros profesionales se pondrá en contacto con usted sobre la consulta: \n $consulta'
            )
        );
    } else {
    echo "El formato de telefono, no es correcto";
    }

}

