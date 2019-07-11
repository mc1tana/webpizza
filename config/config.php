<?php
// fichier de configue general de l'appli
// 1.definition des constante 
// 2.DEFINITION DES variable d'environnement d'execution 
// 3.definition des variable de base de donnees
// 4.definition des variables de routage 
// 5. DEFINITION des expretion reguliere


// 1.definition des constante 

// definition du titre du site 

define('WEBSITE_TITLE', "webpizza, les meilleurs pizza du monde du web!");

//definition du chemin vers le repertoire 'utils'
define('UTILS_PATH',"../utils/");

// 2.DEFINITION DES variable d'environnement d'execution 

//environnement de developpement d'execution
//les valeur peuvent etre "prod" ou "dev"
//par defaut on considere que l'appli s'execute en environnement de prod
$env="prod";

//liste des domaines que l'on considere comme etant des environnement de eveloppementt
$dev_domains=[
    "127.0.0.1",
    "localhost",
    "webpizza.local"
];




// 3.definition des variable de base de donnees

// liste des configurations de connection aus bases de donnees par defaut 
$db_config=[];

//liste des connection aux bases de donnees 
//cette liste sera nourris par le fichier db_connect.php
$db=[];

//inclusion de la config de la base de donnee
require_once "database.php";

// 4.definition des variables de routage 

//def de l4url
$uri="/";
//definition de la table de roputage par defaut
$routes=[];
//contient les info de la route courante
$route=[];
//inclusion de la config de routage
require_once "routes.php";
// 5. DEFINITION des expretion reguliere

