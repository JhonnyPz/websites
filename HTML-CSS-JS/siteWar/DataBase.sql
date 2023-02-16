create database jugadores;
use jugadores;

create table usuarios (
	id int auto_increment,
    Nombre varchar(30) not null,
    Apellidos varchar(30) not null,
    Email varchar(30) not null,
    Celular Varchar(30) not null,
    primary key(id)
);