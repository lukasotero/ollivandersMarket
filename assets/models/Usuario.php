<?php

require_once('ModeloPadre.php');
require_once('TipoUsuario.php');

class Usuario extends ModeloPadre
{
    public function __construct()
    {
        $fecha = date('Y-m-d H:i:s');
        parent::__construct(array(
            'id' => null,
            'nombre' => null,
            'email' => null,
            'password' => null,
            'id_tipo_usuario' => null,
            'fecha_alta' => $fecha,
            'fecha_modificacion' => $fecha,            
            'fecha_baja' => null
        ));
    }

    //HASHEAR LA CONTRASEÑA DE UN USUARIO
    public function hashPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    //VALIDAR UN USUARIO
    public function validate($cnx)
    {
        $errores = array();

        //VALIDACIONES
        if(!$this->nombre) $errores['nombre'] = 'Ingresar un nombre';
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) $errores['email'] = 'Ingresar un correo electrónico válido';
        if(!$this->validateEmail($cnx)) $errores['email'] = 'El correo electrónico le pertenece a otra persona';

        //DEVUELVE LA LISTA DE ERRORES
        return $errores;
    }
    
    //VALIDA EL CORREO ELECTRONICO DEL USUARIO
    private function validateEmail($cnx)
    {
        if($this->id){
            //VERIFICA SI EL EMAIL YA LE PERTENECE A OTRO USUARIO QUE NO SEA EL MISMO
            $consulta = $cnx->prepare('
                SELECT COUNT(1)
                FROM usuario
                WHERE email = :email
                AND id <> :id
            ');

            $consulta->bindValue(':id', $this->id);
        }else{
            //VERIFICA SI EL EMAIL YA LE PERTENECE A OTRO USUARIO
            $consulta = $cnx->prepare('
                SELECT COUNT(1)
                FROM usuario
                WHERE email = :email
            ');
        }        
        $consulta->bindValue(':email', $this->email);
        $consulta->execute();
        $cantidad = $consulta->fetchColumn();
        return $cantidad < 1;
    }

    //GUARDAR UN USUARIO
    public function save(Cnx $cnx)
    {
        if($this->id){
            $this->update($cnx);
        }else{
            $this->insert($cnx);
        }
    }

    //INSERTA UN NUEVO USUARIO
    private function insert(Cnx $cnx)
    {
        $fecha = date('Y-m-d H:i:s');

        $consulta = $cnx->prepare('
            INSERT INTO usuario(nombre, email, password, id_tipo_usuario, fecha_alta, fecha_modificacion)
            VALUES(:nombre, :email, :password, :id_tipo_usuario, :fecha_alta, :fecha_modificacion)
        ');

        $consulta->bindValue(':nombre', $this->nombre);
        $consulta->bindValue(':email', $this->email);
        $consulta->bindValue(':password', $this->password);
        $consulta->bindValue(':id_tipo_usuario', TipoUsuario::COMPRADOR);
        $consulta->bindValue(':fecha_alta', $fecha);
        $consulta->bindValue(':fecha_modificacion', $fecha);
        $consulta->execute();
        $this->id = $cnx->lastInsertId();
    }

    //ACTUALIZAR UN USUARIO
    private function update(Cnx $cnx)
    {
        $fecha = date('Y-m-d H:i:s');

        $consulta = $cnx->prepare('
            UPDATE usuario SET 
                nombre = :nombre,
                email = :email,
                password = :password,
                id_tipo_usuario = :id_tipo_usuario,
                fecha_modificacion = :fecha_modificacion
            WHERE id = :id
        ');

        $consulta->bindValue(':nombre', $this->nombre);
        $consulta->bindValue(':email', $this->email);
        $consulta->bindValue(':password', $this->password);
        $consulta->bindValue(':id_tipo_usuario', $this->id_tipo_usuario);
        $consulta->bindValue(':fecha_modificacion', $fecha);
        $consulta->bindValue(':id', $this->id);
        $consulta->execute();
    }

    //BUSCAR A UN USUARIO POR SU ID
    public static function find(Cnx $cnx, int $id)
    {
        $consulta = $cnx->prepare('
            SELECT id, nombre, email, id_tipo_usuario, password, fecha_alta, fecha_modificacion, fecha_baja
            FROM usuario
            WHERE id = :id
        ');

        $consulta->bindValue(':id', $id);
        $consulta->execute();
        $consulta->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Usuario');
        return $consulta->fetch();
    }

    //BUSCAR A UN USUARIO POR SU EMAIL
    public static function findByEmail(Cnx $cnx, string $email)
    {
        $consulta = $cnx->prepare('
            SELECT id, nombre, email, id_tipo_usuario, password, fecha_alta, fecha_modificacion, fecha_baja
            FROM usuario
            WHERE email = :email
        ');
        
        $consulta->bindValue(':email', $email);
        $consulta->execute();
        $consulta->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Usuario');
        return $consulta->fetch();
    }

    //LOGUEAR A UN USUARIO
    public static function login(Cnx $cnx, $email, $password)
    {
        $usuario = self::findByEmail($cnx, $email);
        if($usuario and password_verify($password, $usuario->password)){
            return $usuario;
        }else{
            return false;
        }
    }

    //REGISTRAR A UN USUARIO COMO COMPRADOR
    public static function register(Cnx $cnx, $nombre, $email, $password)
    {
        $usuario = new Usuario();
        $usuario->nombre = $nombre;
        $usuario->email = $email;
        $usuario->hashPassword($password);
        $usuario->id_tipo_usuario = TipoUsuario::COMPRADOR;
        $usuario->save($cnx);
        return $usuario;
    }

    //PAGINADO DE USUARIOS
    public static function paginate(Cnx $cnx, $pagina, $cuantos)
    {
        $desde = ($pagina - 1) * $cuantos;

        $consulta = $cnx->prepare('
            SELECT u.id, u.nombre, u.email, u.id_tipo_usuario
            FROM usuario u
            WHERE u.fecha_baja IS NULL
            ORDER by u.id
            LIMIT :desde, :cuantos
        ');
        
        $consulta->bindValue(':desde', $desde, PDO::PARAM_INT);
        $consulta->bindValue(':cuantos', $cuantos, PDO::PARAM_INT);

        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_OBJ);
    }

    //CANTIDAD TOTAL DE USUARIOS
    public static function countAll(Cnx $cnx)
    {
        $consulta = $cnx->prepare('
            SELECT COUNT(1)
            FROM usuario u
            WHERE u.fecha_baja IS NULL
        ');

        $consulta->execute();
        return $consulta->fetchColumn();
    }
}