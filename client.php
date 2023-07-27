<?php

require('database.php');
if(isset($_POST['valid'])){
    if(isset($_POST['nom'],$_POST['prenom'],$_POST['ville'],$_POST['telephone']))
    {
        $inscrit=$conn->prepare('INSERT INTO client(nom,prenom,ville,telephone) VALUES(?,?,?,?,?) ');
        $inscrit=$inscrit->execute([
            htmlspecialchars($_POST['nonm']),
            htmlspecialchars($_POST['prenom']),
            htmlspecialchars($_POST['ville']),
            htmlspecialchars($_POST['telephone']), 
        ]);
        $success='Fournisseur enrégistré avec succès';
        header('location: list_fournisseur.php');
    }else{
        $error='Veuillez remplir tous les champs';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
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
                    <a href="index.html " ><span class="fas fa-igloo"></span>
                        <span>Dashbord</span>
                    </a>
                </li>
                <li>
                    <a href="list_produit.php" ><span class="fas fa-shopping-cart"></span>
                        <span>Gestion du stock</span>
                    </a>
                </li>
                <li>
                    <a href="#"  class="active"><span class="fas fa-users"></span>
                        <span>Clients</span>
                    </a>
                </li>
                <li>
                    <a href="fournisseur.php" ><span class="fas fa-male"></span>
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
    
    <form class="af" method="POST" action="">
        <div>
            <?php if(isset($success)) {
                ?>
                <p style="color:green"> <?=$success ?></p>
                <?php
            }  ?>
             <?php if(isset($error)) {
                ?>
                <p style="color:red"> <?=$error ?></p>
                <?php
            }  ?>
        </div>
        <h2> Connexion</h2>
        <!-- <input type="number" placeholder="id_produit" required><br><br> -->
        <input type="text" id="nom" name="nom" placeholder="Nom" required><br><br>
        <input type="text" id="prenom" name="prenom" placeholder="Prenom" required><br><br>
        <input type="text" id="ville" name="ville" placeholder="Ville" required> <br><br>
        <input type="number" id="telephone" name="telephone" placeholder="Téléphone" required><br><br>
        <button type="submit" class="submit-btn" name="valid">
            Se coonecter
        </button>
    </form>

</body>

</html>