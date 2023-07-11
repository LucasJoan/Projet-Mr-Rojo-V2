create database Projet_S4;
use Projet_S4;
create table utilisateur(
    id_utilisateur  int primary key auto_increment,
    nom varchar(100) not null,
    Prenom varchar(100) not null,
    email varchar(100) not null unique,
    mdp varchar(100) not null
);

insert into utilisateur values(null,'Rajoelina','Lucas','Lucas@gmail.com','123');

create table genre(
    id_genre int primary key auto_increment,
    nom_genre varchar(10)
);

insert into genre values(null,'Femme');
insert into genre values(null,'Homme');

create table objectif(
    id_objectif int primary key auto_increment,
    objectif varchar(100)
    );
insert into objectif values(null,'Perdre du poids');
insert into objectif values(null,'Maintenir son poids');
insert into objectif values(null,'Prendre du poids');

create table taille(
    id_taille int primary key auto_increment,
    taille decimal(8.3),
    id_utilisateur int,
    foreign  key taille (id_utilisateur) references utilisateur(id_utilisateur)
);
insert into taille values(null,1.50,1);

create table poids(
    id_poids int primary key auto_increment,
    poids decimal(8.3),
    id_utilisateur int,
    foreign  key poids (id_utilisateur) references utilisateur(id_utilisateur)
);
insert into poids values(null,60,1);

select utilisateur.nom,
genre.nom_genre,
completion.taille,
completion.poids
from completion
join genre
on completion.id_genre=genre.id_genre
join utilisateur
on completion.id_utilisateur=utilisateur.id_utilisateur;


create table completion(
    id_Completion int primary key auto_increment,
    id_utilisateur int,
    foreign key completion (id_utilisateur) references utilisateur(id_utilisateur),
    id_genre int,
    foreign key (id_genre) references genre(id_genre),
    taille decimal(8.6),
    poids decimal(8.6)   
);

insert into completion values(null,1,1,1.60,60);