Pour créer un site web permettant de créer un portfolio, vous pouvez utiliser les langages HTML, CSS, PHP et JavaScript, ainsi qu'une base de données PDO pour stocker les informations relatives aux projets.

Voici les étapes à suivre pour réaliser ce site web :

- Concevoir la structure de la page web en utilisant HTML et CSS. Créez une page d'accueil qui affiche une liste de vos projets avec une image, une brève description et un lien vers une page détaillée pour chaque projet.
    index.php et index.css et style.css

- Utiliser PHP pour établir une connexion à la base de données PDO. Créez une table pour stocker les informations relatives aux projets, telles que le titre, la description, l'image et le lien vers la page détaillée.
    Database.php 

- Utiliser PHP pour récupérer les informations stockées dans la base de données et les afficher sur la page d'accueil. Vous pouvez utiliser des boucles pour afficher la liste des projets.
    afficher_projet.php


- Créer une page détaillée pour chaque projet. Utilisez PHP pour récupérer les informations stockées dans la base de données et les afficher sur la page. Vous pouvez également ajouter des fonctionnalités telles qu'un formulaire de contact ou un bouton de partage pour chaque projet.
    page_detaillee.php

- Utiliser JavaScript pour ajouter des fonctionnalités interactives à la page, telles que des effets de survol sur les images et des validations de formulaire avant envoi.
    validation_formulaire et survol.js

- Utiliser AJAX pour charger dynamiquement plus de projets sur la page d'accueil lorsque l'utilisateur clique sur un bouton "Voir plus".

    Pour utiliser AJAX afin de charger dynamiquement plus de projets sur la page d'accueil, vous pouvez suivre les étapes suivantes :

    - Ajouter un bouton "Voir plus" à la fin de la liste des projets sur la page d'accueil, en utilisant HTML et CSS.
    - Ajouter un événement "click" sur le bouton "Voir plus" en utilisant JavaScript.
    - Dans la fonction qui se déclenche lors du clic sur le bouton "Voir plus", utiliser AJAX pour envoyer une requête à un script PHP qui récupère les informations sur les projets suivants dans la base de données.
    - Traiter les données renvoyées par le script PHP et ajouter le HTML nécessaire pour afficher les projets suivants à la liste existante.


- Utiliser PHP pour gérer l'ajout de nouveaux projets à la base de données via un formulaire de soumission de projet. Assurez-vous d'inclure une validation de formulaire côté serveur pour éviter les soumissions non valides.
    ajouter_projet.php et 

- Enfin, assurez-vous que le site est responsive et s'adapte à différentes tailles d'écran, en utilisant des techniques de design responsif telles que les Media Queries.




Faits :
methode post : formulaire
verif du formulaire : done
creation de BDD
