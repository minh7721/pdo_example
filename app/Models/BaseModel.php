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


?>