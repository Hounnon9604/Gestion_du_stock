<?php 



// Configuration de la base de données
$servername = "localhost";
$username = "root";
$password = "";
$database = "g-stock";

// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $database);

// Vérifier la connexion
if (!$conn) {
    die("Erreur de connexion à la base de données: " . mysqli_connect_error());
}
?>
