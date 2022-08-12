<?php

require_once('../../helpers/autoload.php');
require_once('../../models/Cnx.php');
require_once('../../models/TipoUsuario.php');
require_once('../../helpers/helper_input.php');

if(!Auth::isAdministrador())
{
    header('Location: index.php');
}

try{
    $cnx = new Cnx();
}catch(PDOException $e){
    echo 'Ha ocurrido un error';
    exit;
}

$ide = test_input( $_REQUEST['ide'] ?? null );

$usuario = Usuario::find($cnx, $ide);

$errores = array();

if( isset($_POST['submit']) ) 
{
    $usuario -> nombre = test_input( $_POST['nombre'] ?? null );
    $usuario -> email =  test_input( $_POST['email'] ?? null );
    $usuario -> id_tipo_usuario = test_input( $_POST['id_tipo_usuario'] ?? null );

    $errores = $usuario -> validate($cnx);

    if(count($errores) == 0){
        $usuario -> save($cnx);
        header('Location: usuarios.php');
    }
}

$tipo_usuario = TipoUsuario::all($cnx);
$action = 'modificar_usuario.php';

require_once('../../views/guardar_usuario.php');

unset($cnx);