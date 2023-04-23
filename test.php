<?php
function insertForTest(){
    for($i=0; $i<50; $i++){
        $query = $this->pdo->prepare("INSERT INTO projects (email,path) VALUES (:email,:path)");
        $query->execute([
        ':email' => 'frankakomo@gmail.com',
        ':path' => './../path/test/img'.$i
        ]);
    }
}

//quelque part dans un fichier ex: dash.php

include 'Database.php';

$db = new Database;

$db->insertForTest();

//ensuite tu lance ton serveur et tu te rend dans ton navigateur a la page dash.php
//du coup ta page va s'executer et executer la fonction et donc rajouter les images dans la base