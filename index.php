
<?php
require_once("DAO.php");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SideApps</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>SideApps</h1>
        <h2>Créer un contrat</h2>
        <form action="index.php" method="post">
            <label for="nom">Nom du contrat</label>
            <input type="text" name="nom" id="nom">
            <label for="nom_mecene">Nom du mécène</label>
            <input type="text" name="nom_mecene" id="nom_mecene">
            <label for="date_debut">Date de début</label>
            <input type="date" name="date_debut" id="date_debut">
            <label for="date_fin">Date de fin</label>
            <input type="date" name="date_fin" id="date_fin">
            <input type="submit" value="Créer" id="submitBtn">
        </form>
    
    <div class="listeContrat">
        <h2>Liste des contrats</h2>
        <table>
            <thead>
                <tr>
                    <th>Nom du contrat</th>
                    <th>Nom du mécène</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = getAllContrats();
                foreach($result as $row){
                    echo "<tr>";
                    echo "<td>".$row['nom']."</td>";
                    echo "<td>".$row['nom_mecene']."</td>";
                    echo "<td>".$row['date_debut']."</td>";
                    echo "<td>".$row['date_fin']."</td>";
                    echo "<td><a href='supprimerContrat.php?id=".$row['id']."'>Supprimer</a></td>";
                    echo "<td><a href='PDFcreator.php?id=".$row['id']."'>To PDF</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>

</body>

<?php
if(isset($_POST['nom']) && isset($_POST['nom_mecene']) && isset($_POST['date_debut']) && isset($_POST['date_fin'])){
    $nom = $_POST['nom'];
    $nom_mecene = $_POST['nom_mecene'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    createContrat($nom, $nom_mecene, $date_debut, $date_fin);
    header("Location: index.php");
    exit();
}