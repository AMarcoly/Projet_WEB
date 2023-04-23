<?php

require_once 'Database.php';

class Project extends Database
{
    public function __construct()
    {
        parent::__construct();
        $this->initTable();
        $this->insertForTest();
    }

    public function initTable()
    {
        $this->pdo->query('CREATE TABLE IF NOT EXISTS projets (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                titre TEXT NOT NULL,
                difficulte INTEGER NOT NULL,
                description TEXT NOT NULL,
                lien TEXT NOT NULL
            )');
    }

    function insertForTest(){
        for($i=0; $i<100; $i++){
            $query = $this->pdo->prepare("INSERT INTO projets (titre,difficulte,description,lien) VALUES (:titre,:difficulte,:description,:lien)");
            $query->execute([
                ':titre' => 'projet'.$i,
                ':difficulte' => '3',
                ':description' => 'Projet cddvvv vv vffgf fffg ',
                ':lien' => 'jomimar.com'
            ]);
        }
    }
}

