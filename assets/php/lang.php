<?php

session_start();

$idioma = (isset($_GET['lang'])) ? $_GET['lang'] : null;

$lang = array(
    'es', 'pt', 'en',
);

if (isset($_GET['lang']) and in_array($_GET['lang'], $lang)) {

    require_once 'assets/lang/' . $_GET['lang'] . '.php';

    setcookie('lang', $_GET['lang']);

} else if (isset($_COOKIE['lang']) and in_array($_COOKIE['lang'], $lang)) {
    require_once 'assets/lang/' . $_COOKIE['lang'] . '.php';
} else {
    require_once 'assets/lang/es.php';
}
