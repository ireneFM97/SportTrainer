<?php

session_start();
session_destroy();
header('Location: ../HTML/loginRegistro.html');