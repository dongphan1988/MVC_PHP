<?php


namespace Model;
use PDO;

class DB_Connection
{
    public  $conn;
    public $dsn;
    public $user;
    public $password;

    public function __construct($dsn,$user,$password)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->password = $password;
    }
    public function connect(){
        $this->conn = new PDO($this->dsn,$this->user,$this->password);
        return $this->conn;

    }

}