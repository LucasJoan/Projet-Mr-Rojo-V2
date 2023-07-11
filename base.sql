create database Projet_S4;
use Projet_S4;
create table utilisateur(
    id_utilisateur  int primary key auto_increment,
    nom varchar(100) not null,
    Prenom varcahr(100) not null,
    email varchar(100) not null unique,
    mdp varchar(100) not null
);
create table genre(
    id_genre int primary key auto_increment,
    nom_genre varchar(10),
    id_utilisateur int,
    foreign  key genre (id_utilisateur) references utilisateur(id_utilisateur)
);

create table objectif(
    id_objectif int primary key auto_increment,
    objectif varchar(100),
    id_utilisateur int,
    foreign  key objectif (id_utilisateur) references utilisateur(id_utilisateur)
);

create table taille(
    id_taille int primary key auto_increment,
    taille decimal(8.3),
    id_utilisateur int,
    foreign  key taille (id_utilisateur) references utilisateur(id_utilisateur)
);
create table poids(
    id_poids int primary key auto_increment,
    poids decimal(8.3),
    id_utilisateur int,
    foreign  key poids (id_utilisateur) references utilisateur(id_utilisateur)
);