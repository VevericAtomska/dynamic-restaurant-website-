<?php
include DIR_TEMP . "stranica_pocetna_nav.php";

// Uključivanje konekcije sa bazom podataka


// Provera da li su podaci poslati metodom POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $telefon = $_POST['telefon'];
    $datum = $_POST['datum'];
    $vreme = $_POST['vreme'];
    $broj_osoba = $_POST['broj_osoba'];

    $query = "INSERT INTO rezervacije (ime, prezime, telefon, datum, vreme, broj_osoba)
              VALUES ('$ime', '$prezime', '$telefon', '$datum', '$vreme', '$broj_osoba')";

    // Izvršavanje upita
    if (mysqli_query($connect, $query)) {
        echo "Uspešno ste rezervisali mesto!";
    } else {
        echo "Došlo je do greške prilikom rezervacije mesta: " . mysqli_error($connect);
    }
}


include DIR_REZERVACIJE . 'stranica_rezervacije.php';
include DIR_TEMP . "stranica_footer.php";

?>