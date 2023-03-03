<?php
require_once("config.php");
// On écrit notre requête

function createContrat($nom, $nom_mecene, $date_debut, $date_fin){
    $db = getDB();
    $sql = "INSERT INTO Contrat (nom, nom_mecene, date_debut, date_fin) VALUES (:nom, :nom_mecene, :date_debut, :date_fin)";
    $query = $db->prepare($sql);
    $parameters = array(':nom' => $nom, ':nom_mecene' => $nom_mecene, ':date_debut' => $date_debut, ':date_fin' => $date_fin);
    $query->execute($parameters);
}

function getContratById($id){
    $db = getDB();
    $sql = "SELECT * FROM Contrat WHERE id = :id";
    $query = $db->prepare($sql);
    $parameters = array(':id' => $id);
    $query->execute($parameters);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getAllContrats(){
    $db = getDB();
    $sql = "SELECT * FROM Contrat";
    $query = $db->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function deleteContrat($id){
    $db = getDB();
    $sql = "DELETE FROM Contrat WHERE id = :id";
    $query = $db->prepare($sql);
    $parameters = array(':id' => $id);
    $query->execute($parameters);
}

