<?php

class Database {
    private $server_name = "localhost";
    private $username = "root";
    private $password = ""; // For MAMP users, please use 'root' as your password value
    private $db_name = "thecompany";
    protected $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);

        if($this->conn->connect_error){
            die('Unable to connect to the database: ' . $this->conn->connect_error);
        }
    }
}

?>