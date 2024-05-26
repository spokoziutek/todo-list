<?php

namespace config;

class DatabaseConnection
{

    private $host = 'localhost';
    private $username ='root';
    private $password = '';
    private $database = 'todo_list';
    private $connection;


    public function getConnection()
    {
        return new \PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
    }



}