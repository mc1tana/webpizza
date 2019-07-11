mon appli est demarée
<!-- fichier d'execution de l'appli -->
<?php

// 1.demarge session
// LA SESSION VA PERMETRE DE SUIVRE PENDANT LE DUREE DE SA NAVIGATION 

// 2.integration de la configue
require_once "../config/config.php";
echo WEBSITE_TITLE;

// 3.definition de l'environnement 
    require_once "../app/environnement.php";
//4.comportement erreur 
require_once "err-reporing.php"
//connexion a la base de donnee
