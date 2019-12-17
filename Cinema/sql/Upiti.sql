
# Izlistaj sve korisnike po imenu i prezimenu koji su rezervisali (gledali) film pod nazivom Film 3
select ime, prezime  from korisnik k, rezervacije r where
k.id = r.korisnik_id and exists (select * from filmovi f where r.film_id = f.id and f.naziv = 'Film 3' );

# Daj sva sjedishta koja je partikularni korisnik (npr id:3) rezervisao u salama veceg kapaciteta od 200 do sad
select s.broj, s.broj_sale from sjedista s, karte kr, sale sl where
s.broj = kr.sjediste_broj and s.broj_sale = kr.broj_sale and exists (
select * from rezervacije r where kr.rezervacije_id = r.id and r.korisnik_id = 3) and sl.kapacitet > 150;

# Sva razlicita rezervisana sjedista za partikularni film (sve sale ukljucene)
select distinct s.broj, s.broj_sale from sjedista s, karte k, rezervacije r, filmovi f where 
s.broj = k.sjediste_broj and s.broj_sale = k.broj_sale  
and f.id = r.film_id and k.rezervacije_id = r.id and f.naziv = 'Film 1';