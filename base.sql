-- create database baba;
-- use baba;

create table user(
    idUser int primary key auto_increment,
    nom varchar(100) not null,
    email varchar(100) not null unique,
    mdp varchar(100) not null,
    identification char
);

create table commentaire(
    idCom int primary key auto_increment,
    idUser int not null,
    text text not null,
    dateTimeComment datetime,
    foreign key (idUser) references User(idUser)
);

create table rendezVous(
    idRdv int primary key auto_increment,
    idUser int,
    dateTimeRDV datetime,
    message text,
    foreign key (idUser) references User(idUser)
);

create table message_validation(
    id_mesV int primary key auto_increment,
    Etat int,
    Daty date,
    idUser int,
    foreign key (idUser) references User(idUser)
);

create table produit(
    idProduit int primary key auto_increment,
    nomProduit varchar(100),
    prixKg double
);

create table achat(
    idAchat int primary key auto_increment,
    idProduit int,
    idUser int,
    quantiter double,
    foreign key (idUser) references User(idUser),
    foreign key (idProduit) references Produit(idProduit)
);

create table stock(
    idStock int primary key auto_increment,
    idProduit int,
    quantiter double,
    foreign key (idProduit) references Produit(idProduit)

);
create table message_validation(
    id_mesV int primary key auto_increment,
    Etat int,
    Daty date,
    idUser int,
    foreign key (idUser) references User(idUser)
);

create table Historique(
    id_historique int primary key auto_increment,
    id_client int,
    foreign key (id_client) references Client(id_client),
    Daty date,
    id_riz int,
    foreign key Historique(id_riz) references Riz(id_riz),
    quantité_riz int,
    pu_riz int,
    prix_total int
);
---------Donnee de test-------------------------






