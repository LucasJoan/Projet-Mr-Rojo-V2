create database Projet_S4;
use Projet_S4;
create table user(
    idUser int primary key auto_increment,
    nom varchar(100) not null,
    email varchar(100) not null unique,
    mdp varchar(100) not null,
);





