<?php
// Inclure le fichier de configuration de la base de données
include 'database.php';

// Vérifier si l'ID du produit est passé en paramètre
if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Récupérer les données du produit à modifier
    $query = "SELECT * FROM produit WHERE id_produit = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
}

// Vérifier si le formulaire a été soumis
if(isset($_POST['modifier'])){
    // Récupérer les données du formulaire
    $nom_produit = $_POST['nom_produit'];
    $quantite = $_POST['quantite'];
    $prix_unitaire = $_POST['prix_unitaire'];
    $prix_unitaxe = $_POST['prix_unitaxe'];
    $id_fournisseur= $_POST['id_fournisseur'];
    $date = $_POST['date'];

    // Mettre à jour les données dans la base de données
    $query = "UPDATE produit SET nom_produit = '$nom_produit', quantite = '$quantite', prix_unitaire = '$prix_unitaire', prix_unitaxe = '$prix_unitaxe', id_fournisseur = '$id_fournisseur', date = '$date'  WHERE id_produit = $id";
    mysqli_query($conn, $query);

    // Rediriger vers la page principale
    header("Location: list_produit.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier un produit</title>
    <link rel="stylesheet" href="Font Awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        h2{
            text-align: center;
            font-family: sans-serif;
            font-size: 1.5rem;
            color: rgb(37, 35, 35);
        }
        .af {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }
        input{
            width: 95%;
            padding: 10px;
            border: 1px solid #2d57ca62;
            border-radius: 3px;
            outline: none;
        }
        .submit-btn{
            text-align: center;
            background-color: rgba(36, 36, 218, 0.96);
            width: 100%;
            color: #fff;
            border-radius: 4px;
            padding: 5px;
            font-size: 1.5rem;
            outline: none;
            border: none;
        }
        ::-webkit-input-placeholder{
            font-size: 1rem;
        }
    </style>

</head>
<body>
<div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="fab fa-accusoft"></span>G-STOCK</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" ><span class="fas fa-igloo"></span>
                        <span>Dashbord</span>
                    </a>
                </li>
                <li>
                    <a href="list_produit.php" class="active"><span class="fas fa-shopping-cart"></span>
                        <span>Gestion du stock</span>
                    </a>
                </li>
                <li>
                    <a href="#"><span class="fas fa-users"></span>
                        <span>Clients</span>
                    </a>
                </li>
                <li>
                    <a href="list_fournisseur.php" ><span class="fas fa-male"></span>
                        <span>Fournisseurs</span>
                    </a>
                </li>
                <!-- <li>
                    <a href=""><span class="fas fa-bell"></span>
                        <span>Afficher un employer</span>
                    </a>
                </li> -->
                <li>
                    <a href=""><span class=" fas fa-shopping-bag"></span>
                        <span>Commandes</span>
                    </a>
                </li>
                <li>
                    <a href=""><span class="fas fa-book"></span>
                        <span>Facture</span>
                    </a>
                </li>
                <li>
                    <a href=""><span class="fas fa-download"></span>
                        <span>Déconnexion</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <div class="header-title">
                <h2>
                    <label for="">
                        <span class="fas fa-bars"></span>
                    </label>
                    Dashbords
                </h2>
            </div>
            <form action="search.php" method="get">
                <div class="search-container">
                    <input type="number" name="id" placeholder="Rechercher par id...">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
            <!-- <div class="search-wrapper">
            <input class="fas fa-store" type="search" placeholder="rechercher un produit" required>

            <a href="#"><span class="fas fa-bell"></span></a>
            <a href=""><span class="fas fa-store"></span></a>
        </div>   -->
            <div class="user-wrapper">
                <img src="img/im3.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4>Archilée la Queen</h4>
                    <small>Super admin</small>
                </div>
            </div>
        </header>

    <form method="post" action="" class="af">
        <h2>Modifier un produit</h2> <br> <br>
        <label for="nom_produit">Nom_produit:</label> <br> <br>
        <input type="text" id="nom_produit" name="nom_produit" value="<?php echo $row['nom_produit']; ?>" required><br><br>
        <label for="quantite">Quantité:</label><br><br>
        <input type="number" id="quantite" name="quantite" value="<?php echo $row['quantite']; ?>" required><br><br>
        <label for="prix_unitaire">Prix_unitaire:</label><br><br>
        <input type="number" id="prix_unitaire" name="prix_unitaire" value="<?php echo $row['prix_unitaire']; ?>" required><br><br>
        <label for="prix_unitaxe">Prix_unitaxe:</label><br><br>
        <input type="number" id="prix_unitaxe" name="prix_unitaxe" value="<?php echo $row['prix_unitaxe']; ?>" required><br><br>
        <label for="id_fournisseur">Id_fournisseur:</label><br><br>
        <input type="number" id="id_fournisseur" name="id_fournisseur" value="<?php echo $row['id_fournisseur']; ?>" required><br><br>
        <label for="date">Date:</label><br><br>
        <input type="date" id="date" name="date" value="<?php echo $row['date']; ?>" required><br><br>
        <input type="submit" name="modifier" value="Modifier">
    </form>
</body>
</html>
