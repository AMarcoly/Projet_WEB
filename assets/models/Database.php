<?php

class Database
{
    protected $pdo;

    public function __construct(){

        try{
            $this->pdo = new PDO('sqlite:'. dirname(__FILE__) . '/database.db');
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $error){
            echo "Database connection error: ". $error;
        }
    }


}
