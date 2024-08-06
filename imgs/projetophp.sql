create database projetophp;

use projetophp;

create table usuarios(
	id_usuario int not null primary key,
    nome_usuario varchar(200) not null,
    usuario varchar(20) not null unique,
    senha varchar(20) not null
);

show columns from usuarios;

insert into usuarios(nome_usuario, usuario, senha)
values('Rodrigo Vilas' , 'Rodrigo' , '1q2w3e4r5t'); 