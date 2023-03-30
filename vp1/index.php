<?php
define('DIR_ROOT', './');
define('DIR_CORE', DIR_ROOT . 'core/');
define('DIR_MODULES', DIR_ROOT . 'modules/');
define('DIR_VIEW', DIR_ROOT . 'view/');

require_once DIR_CORE . 'konstante.php';
require_once DIR_CORE . 'funkcija.php';
require_once DIR_MODULES . 'ubaci_konfiguracija.php';

$stranica = isset($_GET['stranica']) ? $_GET['stranica'] : '';

if (empty($stranica) || $stranica == 'pocetna') {
    $module_name = 'pocetna';
} else {
    $module_name = $stranica;
}

$module_f = DIR_MODULES . 'ubaci_' . $module_name . '.php';

if (file_exists($module_f)) {
    include $module_f;
} else {
    header('Location: ' . URL_E404);
    exit;
}
?>

