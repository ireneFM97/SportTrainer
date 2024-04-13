<?php

session_start();
session_destroy();
header('Location: ../Vistas/loginRegistro.php');