<?php

require_once('assets/php/lang.php');

require_once('assets/helpers/autoload.php');
require_once('assets/models/Cnx.php');
require_once('assets/helpers/helper_input.php');

try {
    $cnx = new Cnx();
} catch(PDOException $e) {
    echo 'Ha ocurrido un error';
    exit;
}

$error = null;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $email = test_input($_POST['email'] ?? null);
    $password = test_input($_POST['password'] ?? null);

    $usuario = Usuario::login($cnx, $email, $password);

    if($usuario) {
        Auth::create($usuario);
        header('Location: productos_home.php');
    } else {
        $error = $lang['login_error'];
    }
}

require_once('assets/views/_index.php');

unset($cnx);