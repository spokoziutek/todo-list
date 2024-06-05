<?php

namespace config;

class DatabaseConnection
{

    private $host = 'mywebtodolist-server.mysql.database.azure.com';
    private $username ='uorjgqqxhz';
    private $password = 'qweasdzxc123!';
    private $database = 'todo_list';
    private $connection;


    public function getConnection()
    {
        return new \PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
    }



}
