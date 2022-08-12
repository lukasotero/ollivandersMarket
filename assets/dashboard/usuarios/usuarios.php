<?php

require_once('../../helpers/autoload.php');
require_once('../../models/Cnx.php');
require_once('../../helpers/helper_paginador.php');

if(Auth::isComprador()) {
    header('Location: index.php');
}

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
    $msj = 'El usuario se ha agregado correctamente.';
}else if($msj == 'update'){
    $msj = 'El usuario se ha modificado correctamente.';
}else if($msj == 'delete'){
    $msj = 'El usuario se ha eliminado correctamente.';
}

$usuarios = Usuario::paginate($cnx, $pag, $registros_por_pagina);

$cantidad_registros = Usuario::countAll($cnx);

$paginas = paginador($pag, $cantidad_registros, $registros_por_pagina);

require_once('../../views/lista_usuarios.php');

unset($cnx);