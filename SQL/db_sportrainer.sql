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

CREATE TABLE if not exists servicios (
	id_servicio int AUTO_INCREMENT PRIMARY KEY,
    tipo_servicio varchar (50) NOT NULL,
    entrenador varchar (50) NOT NULL,
    dia_entreno varchar (50) NOT NULL,
    hora_entreno varchar (50) NOT NULL,
    precio float
);