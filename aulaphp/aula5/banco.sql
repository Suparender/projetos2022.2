create database cadastro1;
use cadastro1;

create table cliente(
    cod_cli int primary key auto_increment,
    nome varchar(50),
    cpf varchar(11)
);

create table usuario(
    cod int primary key auto_increment,
    nome varchar(50),
    email varchar(50),
    login varchar(50) unique,
    senha char(32),
    perfil enum('adm', 'user'),
);

insert into usuario values(null, 'Enzo', 'corinthienzo@gmail.com', 'Enzogamer', md5('1234'), 'adm');
insert into usuario values(null, 'Ana Maria', 'ana_maria@gmail.com', 'Ana', md5('4321'), 'user');

insert into
    cliente
values(null, 'Marcos Pontes', '09653853275');
select
    *
from
    cliente;