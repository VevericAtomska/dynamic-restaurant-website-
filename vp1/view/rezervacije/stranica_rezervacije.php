<h1>REZERVACIJE</h1>
<h2>- ONLINE REZERVACIJE -</h2>
<div><b>Ili nas pozovite na broj 011/285335</b></div>

<div class="razmak">
    <div>Radno vreme</div>
    <div>11:00 - 15:00</div>
</div>

<br />

<div>
    <?php $status = 'status'; ?>
    <?php if(isset($_SESSION[$status]) && ($_SESSION[$status] == 'administrator' || $_SESSION[$status] == 'korisnik')): ?>


        <form method="post" action="">
            <legend>KONTAKT PODACI</legend>
            <label for="ime">Ime:</label>
            <input type="text" name="ime" required>

            <label for="prezime">Prezime:</label>
            <input type="text" name="prezime" required>

            <label for="telefon">Telefon:</label>
            <input type="tel" name="telefon" required>

            <label for="datum">Datum:</label>
            <input type="date" name="datum" required>

            <label for="vreme">Vreme:</label>
            <input type="time" name="vreme" required>

            <label for="broj_osoba">Broj osoba:</label>
            <input type="number" name="broj_osoba" min="1" max="10" required>

            <input type="submit" value="Rezerviši">
        </form>
    <?php endif ?>
</div>
<br>
<div>
    <p id="rezultat-rezervacije"></p>
</div>
<div>
    Slanjem ove forme vaša rezervacija je evidentirana, ali nije konačno prihvaćena dok je služba rezervacije ne potvrdi kroz telefonski poziv.
</div>

<br />

<div>
    Najljubaznije vas molimo da rezervacije za četvrtak, petak i subotu napravite minimum 48 sati ranije.
</div>



