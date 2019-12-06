USE cinemaDB;
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE sale; 
TRUNCATE karte;
TRUNCATE rezervacije;
TRUNCATE filmovi;
TRUNCATE korisnik;
TRUNCATE projekcije;
TRUNCATE sjedista;
SET FOREIGN_KEY_CHECKS = 1;


INSERT INTO Sale (broj, naziv, kapacitet) VALUES
        (1, 'hipotekarna', 200),
        (2, 'ckb', 150),
        (3, 'amplitudo', 80),
        (4, 'hipotekarna', 100);


INSERT INTO Filmovi (naziv, trajanje) VALUES
        ('Film 1', '1:43:34.0'),
        ('Film 2', '2:34:32.0'),
        ('Film 3', '1:23:34.0'),
        ('Film 4', '2:34:32.0');


        
INSERT INTO Korisnik (ime, prezime, email, telefon) VALUES
        ('Marko', 'Markovic', 'marko@gmail.com', '04554333'),
        ('Janko', 'Jankovic', 'jankovi@gmail.com', '04534353'),
        ('Petar', 'Petrovic', 'petrovic@gmail.com', '04554333'),
        ('Ranko', 'Rankovic', 'ranko@gmail.com', '045454333');    

INSERT INTO Rezervacije (film_id, broj_sale, korisnik_id) VALUES
        (1, 1, 1),
        (2, 2, 2),
        (3, 3, 3),
        (4, 4, 4);     
        
INSERT INTO Projekcije (film_id, broj_sale, vrijeme, cijena) VALUES
        (1, 1, '2019-06-12 12:35:00', 3.5),
        (2, 2, '2019-06-12 12:35:00', 5.5),
        (3, 3, '2019-06-12 12:35:00', 4.5),
        (4, 4, '2019-06-12 12:35:00', 6.0);                 

INSERT INTO Sjedista (broj, broj_sale, tip) VALUES
        (1, 1, 'obican'),
        (2, 2, 'obican'),
        (3, 3, 'obican'),
        (4, 4, 'obican');          
       
INSERT INTO Karte (rezervacije_id, broj_sale, sjediste_broj) VALUES
        (1, 1, 1),
        (2, 2, 2),
        (3, 3, 3),
        (4, 4, 4); 

                                               