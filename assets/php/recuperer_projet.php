<?php

require_once __DIR__ . '/../models/Database.php';
require_once  __DIR__ . '/template.php';

$page = $_GET["page"] ?? 0;
$i=0;
$limit = 3;

$offset = $page*$limit+$i;

//$db = new PDO('sqlite:/database.db');

$db = new Database();
$stmt = $this->pdo->prep('SELECT * FROM projets LIMIT :limit OFFSET :offset');
$stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($res as $r){
    getTemplate($r['titre'],$r['difficulte'],['description']);
}




//$db = new PDO('sqlite:/database.db');
//class ProjetDatabase extends Database
//{
//    public function getProjets($offset, $limit)
//    {
////        $pdo= new Database();
//        $stmt = $this->pdo->prepare('SELECT * FROM projets LIMIT :limit OFFSET :offset');
//        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
//        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
//        $stmt->execute();
//        return $stmt->fetchAll();
//    }
//}
//
//$projetDb = new ProjetDatabase();
//
//$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
//$limit = isset($_GET['limit']) ? intval($_GET['limit']) : 3;
//
//$projets = $projetDb->getProjets($offset, $limit);
//
//header('Content-Type: application/json');
//echo json_encode($projets);
