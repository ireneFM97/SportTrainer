<?php

$correo = $_POST["email"];

$mensaje = "Hola";
mail($correo, 'Mi título', $mensaje);
echo $correo;
// Enviarlo
