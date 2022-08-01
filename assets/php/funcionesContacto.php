<?php

require_once('assets/php/lang.php');

//PHPMAILER
require_once('assets/PHPMailer/src/PHPMailer.php');
require_once('assets/PHPMailer/src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;

$name = test_input($_POST['name'] ?? null);
$email = test_input($_POST['email'] ?? null);
$msg = test_input($_POST['msg'] ?? null);

//CONSTRUCCION DEL EMAIL
$to = 'lukas.otero@davinci.edu.ar';
$subject = 'Contacto desde la web';

$body = <<<HTML
    <h1>$subject</h1>
    <p>De: $name / $email</p>
    <h2>Mensaje</h2>
    $msg
HTML;

$mailer = new PHPMailer();
$mailer->setFrom($email, "$name");
$mailer->addAddress($to);
$mailer->Subject = $subject;
$mailer->msgHTML($body);
$mailer->AltBody = strip_tags($body);
$mailer->CharSet = 'UTF-8';

$errores = array();

if (isset($_POST['submit'])) {

    //VALIDACION DEL NOMBRE
    if (strlen($name) <= 2 || strlen($name) >= 20 || !preg_match("/^[a-zA-ZÀ-ÿ]*$/", $name) || empty($name)) {
        array_push($errores, $lang['contacto_error_nombre']);
    }

    //VALIDACION DEL EMAIL
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) <= 4 || strlen($email) >= 40 || empty($email)) {
        array_push($errores, $lang['contacto_error_email']);
    }

    //VALIDACION DEL MENSAJE
    if (empty($msg)) {
        array_push($errores, $lang['contacto_error_mensaje']);
    }

    //SI NO HAY ERRORES ENVIA EL CORREO
    if (count($errores) == 0) {
        $rta = $mailer->send();

        if ($rta) {
            header('Location: contacto.php');
            die();
        } else {
            array_push($errores, $lang['contacto_error_envio']);
        }
    }
}