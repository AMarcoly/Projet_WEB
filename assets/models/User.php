<?php

require_once 'Database.php';

class User extends Database
{
    public function __construct()
    {
        parent::__construct();
        $this->initTable();
    }

    public function initTable()
    {
        $this->pdo->query('CREATE TABLE IF NOT EXISTS user (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                first_name VARCHAR(100) NOT NULL,
                last_name VARCHAR(100) NOT NULL,
                email VARCHAR(200) NOT NULL UNIQUE,
                passwd VARCHAR(60) NOT NULL 
            )');
    }

    public function getUsers()
    {
        return $this->pdo->query('SELECT * FROM user')
            ->fetchAll();
    }

    function insertUser($f_name, $l_name, $email, $hash_pass){
        $query = $this->pdo->prepare("INSERT INTO user (first_name,last_name,email,passwd) VALUES (:f_name,:l_name,:email,:hashpass)");
        $query->execute([
            ':f_name'   => $f_name,
            ':l_name'   => $l_name,
            ':email'    => $email,
            ':hashpass' => $hash_pass
        ]);
    }
}
