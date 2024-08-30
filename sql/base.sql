drop database if exists proyecto;

create database proyecto;

use proyecto;

create table usuarios(
    nombre varchar(50),
    correo varchar(50),
    clave varchar(50)
);

create table clientes(
    id int AUTO_INCREMENT,
    dni int(9),
    nombre varchar(300),
    apellido varchar(300),
    correo varchar(300),
    telefono varchar(300),
    placa varchar(300),
    modelo varchar(300),
    vehículo varchar(300),
    problema varchar(300),
    problema_especifico text,
    color varchar(300),
    costo varchar(300),
    fecha_llegada varchar(300),
    PRIMARY KEY (id)
);

create table problemas(
    id int AUTO_INCREMENT,
    nombre varchar(50),
    PRIMARY KEY (id)
);
INSERT INTO problemas (id, nombre) VALUES
(NULL, 'motor'),
(NULL, 'corriente'),
(NULL, 'llantas'),
(NULL, 'llantas1')
;