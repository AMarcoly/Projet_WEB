<?php //require_once './assets/php/langue.php';
//
//if(isset($_GET['lang'])){
//    $language = $_GET['lang'];
//}else{
//    $language = 'fr';
//}
//?>

<body>
    <header id="main_header">
        <nav id="en_tete">
            <!-- <img src="assets/img/marcoly_tete.jpeg" alt="Photo de Marcoly Antoine, createur de ce portofolio">
             -->
            <div id="logo">
                <i class="mdi mdi-circle-box"></i>
                <span>Marcoly ANTOINE</span>
            </div>
            <select name="language" id="language">
                <option value="français">français</option>
                <option value="english">english</option>
            </select>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="login.php">Se connecter</a></li>
                <li><a href="contact.php">Nous contacter</a></li>
            </ul>
            <i class="mdi mdi-menu" id="burger"></i>
        </nav>
        <div id="page_de_couverture">
            <h2>Hey, je suis Marcoly ANTOINE. Bienvenue sur mon Portfolio</h2>
            <!-- <img src="assets/img/degrade_texture.jpg" alt="Degrade metalique comme page de couverture">
         -->
        </div>
