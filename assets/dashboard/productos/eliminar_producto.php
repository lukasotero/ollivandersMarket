<?php

require_once('../../helpers/autoload.php');
require_once('../../models/Cnx.php');
require_once('../../models/Producto.php');
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

$ide = test_input( $_GET['ide'] ?? null );

$producto = Producto::find($cnx, $ide);

if($producto){
    $producto -> delete($cnx);
}

header('Location: productos.php');