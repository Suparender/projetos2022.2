create database phpcrud;

use phpcrud;

create table cliente(
    cod int primary key auto_increment,
    nome varchar(50), 
    email varchar(50),
    cpf varchar(11),
    sexo char(1)
);

/*Inserir na tabela*/
insert into cliente values(null, 'Batman', 'thedark@.com', '12345678921', 'M');

/*Mostrar os dados*/
select * from cliente;