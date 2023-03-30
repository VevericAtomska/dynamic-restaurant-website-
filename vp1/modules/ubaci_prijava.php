<?php
include DIR_TEMP . "stranica_pocetna_nav.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    $query = "SELECT * FROM korisnici WHERE korisnicko_ime = '$username' AND lozinka = '$password'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['user_name'];
        $_SESSION['status'] = $row['status'];
        header("location: index.php");
    } else {
        echo "Korisničko ime ili lozinka nisu ispravni.";
    }
}

include DIR_TEMP . "stranica_prijava.php";
include DIR_TEMP . "stranica_footer.php";

?>