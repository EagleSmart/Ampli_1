DROP DATABASE IF EXISTS cinemaDB;

CREATE DATABASE cinemaDB;
use cinemadb;
CREATE TABLE Filmovi (
    id INT NOT NULL AUTO_INCREMENT,
    naziv VARCHAR(255),
    trajanje TIME,
    PRIMARY KEY (id) 
);


CREATE TABLE Sale (
    broj INT NOT NULL,
    naziv VARCHAR(50),
    kapacitet INT, 
    PRIMARY KEY (broj)
);

CREATE TABLE Sjedista (
    broj INT NOT NULL,
    broj_sale int NOT NULL,
    tip VARCHAR(50),
    CONSTRAINT PK_SJEDISTA PRIMARY KEY (broj,broj_sale),
    CONSTRAINT FK_SJEDISTA_SALE FOREIGN KEY (broj_sale) REFERENCES Sale(broj)
);

CREATE TABLE Projekcije (
    film_id INT NOT NULL,
    broj_sale INT NOT NULL,
    vrijeme DATETIME,
    cijena DOUBLE, 
    CONSTRAINT PK_PROJEKCIJE PRIMARY KEY (film_id,broj_sale), 
    CONSTRAINT FK_PROJEKCIJE_FILMOVI FOREIGN KEY (film_id) REFERENCES Filmovi(id),
    CONSTRAINT FK_PROJEKCIJE_SALE FOREIGN KEY (broj_sale) REFERENCES Sale(broj)
);

CREATE TABLE Korisnik (
    id INT NOT NULL AUTO_INCREMENT,
    ime VARCHAR(255),
    prezime VARCHAR(255),
    email VARCHAR(255),
    telefon VARCHAR(50),
    PRIMARY KEY (id) 
);

CREATE TABLE Rezervacije (
    id INT NOT NULL auto_increment,
    film_id INT NOT NULL, 
    broj_sale INT NOT NULL,
    korisnik_id INT NOT NULL,
    PRIMARY KEY (id), 
    CONSTRAINT FK_REZERVACIJE_FILMOVI FOREIGN KEY (film_id) REFERENCES Filmovi(id),
    CONSTRAINT FK_REZERVACIJE_SALE FOREIGN KEY (broj_sale) REFERENCES Sale(broj),
    CONSTRAINT FK_REZERVACIJE_KORISNIK FOREIGN KEY (korisnik_id) REFERENCES Korisnik(id)
);

CREATE TABLE Karte (
    rezervacije_id INT NOT NULL,
    broj_sale INT NOT NULL,
    sjediste_broj INT NOT NULL,
    CONSTRAINT PK_KARTE PRIMARY KEY (rezervacije_id,broj_sale,sjediste_broj),
    CONSTRAINT FK_KARTE_REZERVACIJE FOREIGN KEY (rezervacije_id) REFERENCES Rezervacije(id),
    CONSTRAINT FK_KARTE_SJEDISTA FOREIGN KEY (sjediste_broj) REFERENCES Sjedista(broj),
    CONSTRAINT FK_KARTE_SJEDISTA_2 FOREIGN KEY (broj_sale) REFERENCES Sjedista(broj_sale)
);