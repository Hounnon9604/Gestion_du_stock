<?php
// Inclure le fichier de configuration de la base de données
include 'database.php';

// Vérifier si l'ID du produit est passé en paramètre
if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Supprimer le produit de la base de données
    $query = "DELETE FROM produit WHERE id_produit = $id";
    mysqli_query($conn, $query);

    // Rediriger vers la page principale
    header("Location: list_produit.php");
    exit();
}
?>
