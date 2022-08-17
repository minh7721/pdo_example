<?php
namespace App\Models;
use App\config\Database;
class BaseModel{
    protected $db;
    public function __construct()
    {
        $db = new Database();
        $this->connect = $db->connect();
        $this -> db = $db;
    }

    public function test(){
        echo "ok";
        return $this -> db -> connect();
    }

    public function query($sql)
    {
        return $this -> db -> connect()->query($sql);
    }

}


//class example{
//    public function __construct()
//    {
//        $db = new Database();
//        $connect = $db -> connect();
//        $this->connect = $connect;
//    }
//
//    public function query($sql)
//    {
//        $db = new Database();
//        $connect = $db -> connect();
//        return $connect->query($sql);
//    }
//
//    public function getAll(){
//        $sql = "SELECT * FROM user";
//        $query = $this->query($sql);
//        $ar = [];
//        while ($row = $query->fetch()) {
//            array_push($ar, $row);
//        }
//        return $ar;
//    }
//
//    public function getAllShort(){
//        $query = $this->query("SELECT * FROM user")->fetchAll();
//        return $query;
//    }
//
//}

?>