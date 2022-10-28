create database gta5;

use gta5;

CREATE TABLE tipo(
    idtipo INT PRIMARY KEY auto_increment,
    tipoconta VARCHAR(50)
);


create table conta (
    idconta int PRIMARY key auto_increment,
    username varchar(50),
    datenasc date, 
    email varchar(50),
    senha varchar(50),
    idtipo INT,
    foreign key (idtipo) references tipo (idtipo)
);

insert into tipo values (null, 'Adm');
insert into tipo values (null, 'User');
insert into conta values (null, 'Ababoi', '2005-06-17', 'ababoi@gmail.com', 'Ababoikk4$', 1);
insert into conta values (null, 'Mineirinho', '2015-02-22', 'mineirinho@gmail.com', 'Mineiro33$', 2);