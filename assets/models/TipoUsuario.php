<?php

require_once('ModeloPadre.php');

class TipoUsuario extends ModeloPadre
{
    const ADMINISTRADOR = 1;
    const COMPRADOR = 2;

    public function __construct()
    {
        parent::__construct(array(
            'id' => null,
            'nombre' => null
        ));
    }

    public static function all(Cnx $cnx)
    {
        $consulta = $cnx->prepare('
            SELECT id, nombre 
            FROM tipo_usuario
            ORDER BY nombre
        ');
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_OBJ);
    }
}