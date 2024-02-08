<?php

$correo = $_POST["correo"];

$mensaje = "Línea 1\r\nLínea 2\r\nLínea 3";


// Enviarlo
mail($correo, 'Mi título', $mensaje);