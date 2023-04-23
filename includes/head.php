<?php require_once './assets/php/langue.php';

if(isset($_GET['lang'])){
    $language = $_GET['lang'];
}else{
    $language = 'fr';
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid&family=Quicksand&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css" />

    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/index.css" />
</head>