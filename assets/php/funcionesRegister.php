<?php

require_once('assets/php/lang.php');

$nameRegister = test_input($_POST['nameRegister'] ?? null);
$emailRegister = test_input($_POST['emailRegister'] ?? null);
$passwordRegister1 = test_input($_POST['passwordRegister1'] ?? null);
$passwordRegister2 = test_input($_POST['passwordRegister2'] ?? null);

$erroresRegister = array();

if (isset($_POST['submit'])) {

    //VALIDACION DEL NOMBRE
    if (strlen($nameRegister) <= 2 || strlen($nameRegister) >= 51 || !preg_match("/^[a-zA-Z ]*$/", $nameRegister) || empty($nameRegister)) {
        array_push($erroresRegister, $lang['contacto_error_nombre']);
    }

    //VALIDACION DEL EMAIL
    if (!filter_var($emailRegister, FILTER_VALIDATE_EMAIL) || empty($emailRegister)) {
        array_push($erroresRegister, $lang['contacto_error_email']);
    }

    //VALIDACION DE LA CONTRASEÑA 1
    if (empty($passwordRegister1) || strlen($passwordRegister1) <= 3) {
        array_push($erroresRegister, $lang['login_error_password']);
    }

    //VALIDACION DE LA CONTRASEÑA 2
    if ($passwordRegister1 != $passwordRegister2) {
        array_push($erroresRegister, $lang['register_error_password']);
    }

    //SI NO HAY ERRORES TE REGISTRA
    if (count($erroresRegister) == 0) {
        header('Location: register.php');
    }
}