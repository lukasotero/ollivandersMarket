<?php

$path = dirname(__FILE__, 2);

require_once("$path/config/config.php");

class Cnx extends PDO
{
    public function __construct()
    {
        parent::__construct(
            'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', 
            DB_USER, 
            DB_PASSWORD
        );
    }
}