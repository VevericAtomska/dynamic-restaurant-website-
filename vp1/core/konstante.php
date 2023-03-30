<?php
define('URL_SCRIPT_NAME', $_SERVER['PHP_SELF']);
define('URL_SCRIPT', $_SERVER['REQUEST_URI']);
define('URL_E404', URL_SCRIPT_NAME . '?page=e404');
define('DIR_TEMP', DIR_VIEW . 'temp/');
define('DIR_KONTAKT' , DIR_VIEW . 'kontakt/');
define('DIR_MENU' , DIR_VIEW . 'menu/');
define('DIR_REZERVACIJE' , DIR_VIEW . 'rezervacije/');
define('DIR_PUBLIC', DIR_ROOT . 'public/');
define('DIR_IMAGES', DIR_PUBLIC.'slike/');
define('DIR_CSS', DIR_PUBLIC . 'css/');
define('DIR_JS', DIR_PUBLIC . 'js/');

?>