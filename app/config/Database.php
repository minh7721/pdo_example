<?php
namespace App\config;
use PDO;
use PDOException;

class Database{
    const HOST = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = 'password';
    const DB_NAME = 'question';
    public function connect(){
        try {
            $connect = "mysql:host=".self::HOST.";dbname=".self::DB_NAME.";charset=utf8";
            $pdo = new PDO($connect, self::USERNAME, self::PASSWORD);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
             return $pdo;
//            if($pdo){
//                echo "Connect oke";
//            }
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
//class Database{
//    public function connect(){
//        return new PDO("mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}", $config['username'], $config['password'], [
//            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
//        ]);
//        return [
//            'database' => [
//                'driver' => 'mysql',
//                'host' => 'localhost',
//                'dbname' => 'question',
//                'username' => 'root',
//                'password' => 'password',
//                'charset' => 'utf8',
//            ]
//        ];
//    }
//}







?>