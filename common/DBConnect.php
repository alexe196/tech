<?php
/**
 * Created by PhpStorm.
 * User: berez
 * Date: 30.03.2021
 * Time: 19:41
 */

namespace  App\common;

use PDO;

class DBConnect
{
    private static $instance = null;

    private function __construct(){}

    public static function getInstance()
    {
        if (static::$instance === null) {
            try {
                static::$instance = new PDO('mysql:dbname='.dbname.';host='.host, login, pass);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        return static::$instance;
    }

}