<?php

require_once('config/config.php');
require_once('models/Cnx.php');
require_once('models/Producto.php');
require_once('helpers/helper_input.php');

try{
    $cnx = new Cnx();
}catch(PDOException $e){
    echo 'Ha ocurrido un error';
    exit;
}

$ide = test_input( $_GET['ide'] ?? null );

$producto = Producto::find($cnx, $ide);

//SI EXISTE UN PRODUCTO CON ESE ID, LO ELIMINA
if($producto){
    $producto -> delete($cnx);
}

header('Location: productos.php');