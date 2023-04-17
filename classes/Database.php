<?php

class Database{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = ''; // if youre windows, password is blank
    private $database_name = 'sales_oop';
    public $conn;

    public function __construct()
    {   
        $this->conn = new mysqli($this->servername,$this->username, $this->password, $this->database_name);

        if($this->conn->connect_error){
            die('Unable to connect to database '. $this->conn->connect_error);
        }
    }
}