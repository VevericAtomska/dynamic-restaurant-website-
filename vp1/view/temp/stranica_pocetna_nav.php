<?php
$background_image = DIR_IMAGES . 'ppozadina.jpg';
?>
<html>

<head>
    <meta charset="utf8" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="<?= DIR_CSS . 'style.css' ?>" />
    <link rel="stylesheet" href="<?= DIR_CSS . 'lightbox.css' ?>" />

</head>

<body style="background-image: url('<?php echo $background_image; ?>');">
    <nav>
        <a href="index.php"  >Početna</a>
        <a href="index.php?stranica=menu">Menu</a>
        <a href="index.php?stranica=kontakt">Kontakt</a>
        <a href="index.php?stranica=rezervacije">Rezervacije</a>
        <?php $status = 'status';
        if(!isset($_SESSION['' . $status . '']) || ($_SESSION[$status] != 'administrator'  || $_SESSION[$status] == 'korisnik')): ?>
            <a href="index.php?stranica=prijava">Prijava</a>
        <?php endif ?>

        <?php if(isset($_SESSION[$status]) && ($_SESSION[$status] == 'administrator' || $_SESSION[$status] == 'korisnik')): ?>
            <a href="index.php?stranica=odjava">Odjava</a>
        <?php endif ?>
    </nav>


