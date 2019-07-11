<?php
//fichier de definition de l'environement d'execution de l'application 
// dans le cas ou la var $dev_domain n'est pas definie (dans le fichier config.php)
//on initialise la var $dev_domaine avec untableau
if(!isset($dev_domains)){
    $dev_domaine=[];

}

// si la super global $_SERVER['SERVER_NAME'] n'est pas vide 
// et que la valeur de la super global $_SERVER['server_name'] est dans le tableaU
// //$dev_domains alors on redefini la var $_ENV
if(
    !empty($_SERVER['SERVER_NAME'])&&
    in_array($_SERVER['SERVER_NAME'],$dev_domains)
){
    $env="dev";
}