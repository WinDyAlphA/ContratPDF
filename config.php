<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'sideapps');

try{
    // Connexion à la bdd
    $db = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME.'', DB_USERNAME,DB_PASSWORD);
    $db->exec('SET NAMES "UTF8"');
} catch (PDOException $e){
    echo 'Erreur : '. $e->getMessage();
    die();
}

function getDB(){
    global $db;
    return $db;
}