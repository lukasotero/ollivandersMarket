<?php

require_once('assets/php/lang.php');

require_once('assets/helpers/autoload.php');
require_once('assets/models/Cnx.php');

//SI NO ESTA LOGUEADO, LO REDIRECCIONA AL LOGIN
if(!Auth::validate()) {
    header('Location: login.php');
}

require_once('assets/views/_productos_home.php');

unset($cnx);