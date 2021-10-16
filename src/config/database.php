<?php

class Database
{
    public static function getConnection()
    {
        $envPath = realpath(dirname(__FILE__) . '/../env.ini');
        $env = parse_ini_file($envPath);
        $connect = new mysqli($env['host'], $env['username'], $env['password'], $env['database']);

        if ($connect->connect_error) {
            die("Erro:" . $connect->connect_error);
        }

        return $connect;
    }

    public static function getResultFromQuery($sql){
        $connect = self::getConnection();
        $result = $connect->query($sql);
        $connect->close();
        return $result;
    }

    public static function executeSQL($sql){
        $connect = self::getConnection();
        if(!mysqli_query($connect, $sql)){
            throw new Exception(mysqli_error($connect));
        }

        $connect->close();

    }

}
