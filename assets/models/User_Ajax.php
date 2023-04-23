<?php

$pdo = new PDO('sqlite:database.db');
$query = $pdo->query('SELECT * FROM user');
$users = $query->fetchAll(PDO::FETCH_ASSOC);
$jsonData = json_encode($users);
header('Content-Type: application/json');
echo $jsonData;

