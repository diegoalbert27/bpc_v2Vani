<?php

namespace App\Utils;
use PDO;

/**
 * Database class
 */
class Database extends \PDO
{
    private static $_instance;

    /**
     * __construct function
     */
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=bpcac_v2;charset=utf8';

        try {
            parent::__construct($dsn, 'root', '');
        } catch (\PDOException $e) {
            die("DataBase Error: Database failed.<br>{$e->getMessage()}");
        }
    }

    /**
     * getInstance function
     *
     * @return Database
     */
    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
            self::$_instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }

        return self::$_instance;
    }
}
