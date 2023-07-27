<?php
// Inclure le fichier de configuration de la base de données
include 'database.php';

// Récupérer tous les produits de la base de données
$query = "SELECT * FROM produit";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des produits</title>
</head>
<body>


<style>
table{
    width: 50%;
    border-collapse: collapse;
    margin-top: 1rem;
}
table, th, td {
    border: 1px solid #ccc;
    padding: 1.5rem;
}
.lien{
    
    text-decoration:none;
    background-color: black;
    width: 100%;
    color: #fff;
    border-radius: 4px;
    padding: 10px;
    font-size: 1.5rem;
}
</style>

    <h2>Liste des produits</h2>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Nom produit</th>
            <th>Quantité</th>
            <th>Prix unitaire</th>
            <th>Prix unitaxe</th>
            <th>ID Fournisseur</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        <?php
        // Afficher les produits dans le tableau
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['id_produit']."</td>";
            echo "<td>".$row['nom_produit']."</td>";
            echo "<td>".$row['quantite']."</td>";
            echo "<td>".$row['prix_unitaire']."</td>";
            echo "<td>".$row['prix_unitaxe']."</td>";
            echo "<td>".$row['id_fournisseur']."</td>";
            echo "<td>".$row['date']."</td>";
            echo "<td>
                    <a href='modifier.php?id=".$row['id_produit']."'>Modifier</a> |
                    <a href='supprimer.php?id=".$row['id_produit']."'>Supprimer</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table> <br> <br>
    <a class="lien" href="ajouter_produit.php">Ajouter un produit</a>
</body>
</html>
