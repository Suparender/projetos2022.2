create database eventos;

use eventos;

create table evento(
    idevento int primary key auto_increment,
    titulo varchar(100),
    dtevento date,
    foto varchar(50),
    descricao text,
    site varchar(100)
);

/*

    date --> aaaa-mm-dd
    text --> 65mil caracteres
    longtext --> 4 milhões

*/