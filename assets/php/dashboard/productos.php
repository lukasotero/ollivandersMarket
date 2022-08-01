<?php

require_once('config/config.php');
require_once('models/Cnx.php');
require_once('models/Producto.php');
require_once('helpers/helper_paginador.php');

try{
    $cnx = new Cnx();
}catch(PDOException $e){
    echo 'Ha ocurrido un error';
    exit;
}

$pag = $_GET['pag'] ?? 1;
$registros_por_pagina = 10;

$msj = $_GET['msj'] ?? null;

if($msj == 'add'){
    $msj = 'El producto se ha agregado correctamente.';
}else if($msj == 'update'){
    $msj = 'El producto se ha modificado correctamente.';
}else if($msj == 'delete'){
    $msj = 'El producto se ha eliminado correctamente.';
}

$productos = Producto::paginate($cnx, $pag, $registros_por_pagina);

$cantidad_registros = Producto::countAll($cnx);

$paginas = paginador($pag, $cantidad_registros, $registros_por_pagina);

require_once('views/lista_productos.php');

unset($cnx);