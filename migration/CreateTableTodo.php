<?php

namespace migration;

class CreateTableTodo
{

    public function up($db)
    {
        $sql = "CREATE TABLE IF NOT EXISTS todos (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(255) NOT NULL,
            description TEXT,
            status TINYINT(1) DEFAULT 0,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        $statement = $db->prepare($sql);
        $statement->execute();
    }



}