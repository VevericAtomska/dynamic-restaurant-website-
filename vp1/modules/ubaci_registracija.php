<?php
include DIR_TEMP . "stranica_pocetna_nav.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = mysqli_real_escape_string($connect, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($connect, $_POST['last_name']);
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);

    $user_type = mysqli_real_escape_string($connect, $_POST['user_type']);


    $sql = "INSERT INTO korisnici (ime, prezime,korisnicko_ime, lozinka , email ) VALUES ('$first_name',' $last_name','$username', '$password' , '$email')";

    if (mysqli_query($connect, $sql)) {
        echo "Novi zapis je uspešno napravljen.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
    header('location: index.php?stranica=prijava');

}


include DIR_TEMP . "stranica_registracija.php";
include DIR_TEMP . "stranica_footer.php";
?>