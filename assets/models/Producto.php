<?php

require_once('Cnx.php');
require_once('ModeloPadre.php');

class Producto extends ModeloPadre
{

    public function __construct()
    {
        $fecha = date('Y-m-d H:i:s');
        parent::__construct(array(
            'id' => null,
            'nombre' => null,
            'descripcion' => null,
            'precio' => null,
            'id_categoria' => null,
            'fecha_alta' => $fecha,
            'fecha_modificacion' => $fecha
        ));
    }

    public function validate()
    {
        $errores = array();

        if( !$this->nombre ){
            $errores['nombre'] = 'Ingresar un nombre';
        }

        if( !$this->descripcion ) {
            $errores['descripcion'] = 'Ingresar una descripción';
        }

        if( !filter_var($this->precio, FILTER_VALIDATE_FLOAT) ) {
            $errores['precio'] = 'Ingresar un precio';
        }

        if( !$this->id_categoria ) { 
            $errores['id_categoria'] = 'Ingresar una categoría';
        }

        return $errores;

    }

    public function save(Cnx $cnx)
    {
       if( $this->id ){
           $this->update($cnx);
       }else{
           $this->insert($cnx);
       }
    }

    private function insert(Cnx $cnx)
    {
        $fecha = date('Y-m-d H:i:s');
        $consulta = $cnx->prepare('
            INSERT INTO producto(nombre, descripcion, id_categoria, precio, fecha_alta, fecha_modificacion)
            VALUES(:nombre, :descripcion, :id_categoria, :precio, :fecha_alta, :fecha_modificacion)
        ');
        $consulta->bindValue(':nombre', $this->nombre);
        $consulta->bindValue(':descripcion', $this->descripcion);
        $consulta->bindValue(':id_categoria', $this->id_categoria);
        $consulta->bindValue(':precio', $this->precio);
        $consulta->bindValue(':fecha_alta', $fecha);
        $consulta->bindValue(':fecha_modificacion', $fecha);
        $consulta->execute();        
        $this->id = $cnx->lastInsertId();
    }

    private function update(Cnx $cnx)
    {
        $fecha = date('Y-m-d H:i:s');
        $consulta = $cnx->prepare('
            UPDATE producto SET 
                nombre = :nombre,
                descripcion = :descripcion,
                id_categoria = :id_categoria,
                precio = :precio,
                fecha_modificacion = :fecha_modificacion
            WHERE id = :id
        ');            
        $consulta->bindValue(':nombre', $this->nombre);
        $consulta->bindValue(':descripcion', $this->descripcion);
        $consulta->bindValue(':id_categoria', $this->id_categoria);
        $consulta->bindValue(':precio', $this->precio);        
        $consulta->bindValue(':fecha_modificacion', $fecha);
        $consulta->bindValue(':id', $this->id);
        $consulta->execute();
    }

    public function delete(Cnx $cnx)
    {
        $consulta = $cnx->prepare('
            DELETE FROM producto WHERE id = :id
        ');
        $consulta->bindValue(':id', $this->id);
        $consulta->execute();
    }

    public static function find(Cnx $cnx, int $id)
    {
        $consulta = $cnx->prepare('
            SELECT id, nombre, descripcion, precio, id_categoria
            FROM producto
            WHERE id = :id
        ');
        $consulta->bindValue(':id', $id);
        $consulta->execute();
        $consulta->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Producto');
        return $consulta->fetch();
    }

    public static function all(Cnx $cnx)
    {
        $consulta = $cnx->prepare('
            SELECT p.id, p.nombre, p.precio, p.id_categoria, c.nombre nombre_categoria
            FROM producto p
            INNER JOIN categoria c            
            ON p.id_categoria = c.id
            ORDER BY p.id
        ');
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_OBJ);
    }

    public static function paginate(Cnx $cnx, $pagina, $cuantos)
    {

        $desde = ($pagina - 1) * $cuantos;

        $consulta = $cnx->prepare('
            SELECT p.id, p.nombre, p.precio, p.id_categoria, c.nombre nombre_categoria
            FROM producto p
            INNER JOIN categoria c
            ON p.id_categoria = c.id
            ORDER by p.id
            LIMIT :desde, :cuantos
        ');
        
        $consulta->bindValue(':desde', $desde, PDO::PARAM_INT);
        $consulta->bindValue(':cuantos', $cuantos, PDO::PARAM_INT);

        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_OBJ);
        
    }
}