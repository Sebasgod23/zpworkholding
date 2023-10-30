CREATE DATABASE ZEROPOINT;
USE ZEROPOINT;


CREATE TABLE  ZP_USUARIO(
    id_usuario INT NOT NULL AUTO_INCREMENT,
    nombre_usuario VARCHAR(50) NOT NULL,
    password VARCHAR(150) NOT NULL,
    activo INT(2),
    token VARCHAR(100),
    CONSTRAINT pk1 PRIMARY KEY (id_usuario)
);

CREATE TABLE  ZP_CONTACTOS(
    id_contacto INT NOT NULL AUTO_INCREMENT,
    correo VARCHAR(50)NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    asunto VARCHAR(200)NOT NULL,
    telefono VARCHAR(10)NOT NULL,
    mensaje VARCHAR(200)NOT NULL,
    CONSTRAINT pk2 PRIMARY KEY (id_contacto)
);

CREATE TABLE  ZP_IMAGEN(
    id_imagen INT NOT NULL AUTO_INCREMENT,
    imagen VARCHAR(30),
    descripcion VARCHAR(100) default NULL,
    accion varchar(10)  default NULL,
    CONSTRAINT pk3 PRIMARY KEY (id_imagen)
);

