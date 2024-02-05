CREATE DATABASE if not exists sportrainer;

USE sportrainer;

CREATE TABLE if not exists usuarios (
    id_usuario int AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(50) NOT NULL,
    apellidos varchar(150) NOT NULL,
    usuario varchar(250) NOT NULL,
    email varchar(150) NOT NULL,
    contrasenia varchar(250) NOT NULL
);