<?php
include DIR_TEMP . "stanica_pocetna_nav.php";
session_destroy();
// preusmeravanje na početnu stranicu
header("location: index.php");
exit();
?>