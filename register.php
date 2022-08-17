<?php

require_once('assets/php/lang.php');

require_once('assets/helpers/autoload.php');
require_once('assets/models/Cnx.php');
require_once('assets/helpers/helper_input.php');

if(Auth::validate()) {
    Auth::destroy();
}

try {
    $cnx = new Cnx();
} catch(PDOException $e) {
    echo 'Ha ocurrido un error';
    exit;
}

$errores = array();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = test_input($_POST['name'] ?? null);
    $email = test_input($_POST['email'] ?? null);
    $password = test_input($_POST['password'] ?? null);
    $password2 = test_input($_POST['password2'] ?? null);

    //VALIDACION DEL NOMBRE
    if (strlen($name) <= 2 || strlen($name) >= 51 || !preg_match("/^[a-zA-Z ]*$/", $name) || empty($name)) {
        array_push($errores, $lang['contacto_error_nombre']);
    }

    //VALIDACION DEL EMAIL
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email) || Usuario::findByEmail($cnx, $email)) {
        if (Usuario::findByEmail($cnx, $email)) {
            array_push($errores, $lang['contacto_error_email_existente']);
        } else {
            array_push($errores, $lang['contacto_error_email']);
        }
    }

    //VALIDACION DE LA CONTRASEÑA 1
    if (empty($password) || strlen($password) <= 3) {
        array_push($errores, $lang['login_error_password']);
    }

    //VALIDACION DE LA CONTRASEÑA 2
    if ($password != $password2) {
        array_push($errores, $lang['register_error_password']);
    }

    //SI NO HAY ERRORES TE REGISTRA
    if (count($errores) == 0) {
        $usuario = Usuario::register($cnx, $name, $email, $password);
        Auth::create($usuario);
        header('Location: productos_home.php');
    }
}

require_once('assets/views/_register.php');

unset($cnx);