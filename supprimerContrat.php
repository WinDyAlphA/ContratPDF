<?php
require_once("DAO.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteContrat($id);
    header("Location: index.php");
}