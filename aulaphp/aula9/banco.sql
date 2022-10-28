
CREATE DATABASE dados;

USE dados;

CREATE TABLE cargo(
    idcargo INT PRIMARY KEY auto_increment,
    nomecargo VARCHAR(50),
    salario DOUBLE(8,2)

);

CREATE TABLE funcionario(
    idfunc INT PRIMARY KEY auto_increment,
    nome VARCHAR(50),
    email VARCHAR(50),
    dnasc DATE,
    cpf CHAR(14),
    idcargo INT,
    FOREIGN KEY (idcargo) REFERENCES cargo (idcargo)

);

INSERT INTO cargo VALUES (null,'Programador',3100.50);
INSERT INTO cargo VALUES (null,'Web Design',3500.00);
INSERT INTO cargo VALUES (null,'Suporte',2500.70);