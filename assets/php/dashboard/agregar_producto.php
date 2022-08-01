<?php

require_once('config/config.php');
require_once('models/Cnx.php');
require_once('models/Categoria.php');
require_once('models/Producto.php');
require_once('helpers/helper_input.php');

try{
    $cnx = new Cnx();
}catch(PDOException $e){
    echo 'Ha ocurrido un error';
    exit;
}

$producto = new Producto();

$errores = array();

if( isset($_POST['submit']) )
{
    $producto -> nombre = test_input( $_POST['nombre'] ?? null );
    $producto -> descripcion =  test_input( $_POST['descripcion'] ?? null ) ;
    $producto -> precio = test_input( $_POST['precio'] ?? null );
    $producto -> id_categoria = test_input( $_POST['id_categoria'] ?? null );

    $errores = $producto -> validate();

    if(count($errores) == 0){
        $producto -> save($cnx);
        header('Location: productos.php');
    }
}

$categorias = Categoria::all($cnx);
$action = 'agregar_producto.php';

require_once('views/guardar_producto.php');

unset($cnx);