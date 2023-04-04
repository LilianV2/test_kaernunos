<?php

class DbPDO{

    private static string $server = "localhost";
    private static string $username = "root";
    private static string $password = "";
    private static string $database = "test_kaer";
    private static ?PDO $db = null;


    public static function connect(): ?PDO
    {
        try{
            if (self::$db === null){
                self::$db = new PDO("mysql:host=" .self::$server . ";dbname=" . self::$database . ";charset=utf8", self::$username, self::$password);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        }
        catch(PDOException $e){
            echo "erreur de connexion a la db : " . $e->getMessage();
            die();
        }

        return self::$db;
    }
}