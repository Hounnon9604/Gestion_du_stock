<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Font Awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Gestion du stock</title>
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
                    <a href=""><span class="fas fa-male"></span>
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
        <main>
            <!-- <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>40,847</h1>
                        <span>Commandes</span>
                    </div>
                    <div>
                        <span class="fas fa-store"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>48,987</h1>
                        <span>Vente</span>
                    </div>
                    <div>
                        <span class="fas fa-clipboard-list"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>$124</h1>
                        <span>Profil</span>
                    </div>
                    <div>
                        <span class="fas fa-bomb"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>$6k</h1>
                        <span>Revenu</span>
                    </div>
                    <div>
                        <span class="fab fa-google-wallet"></span>
                    </div>
                </div>
            </div> -->

            <!-- <div class="overview">
                <h2>Aperçu du stock</h2>
                <p>Total des produits en stock: <span id="totalStock">50</span></p>
                <p>Produits en rupture de stock: <span id="outOfStock">5</span></p>
                Ajoutez ici les autres informations d'aperçu
            </div> -->
</div>   
    <div class="product-management">
    <form class="af">
        <h2> Ajouter un produit</h2>
        <input type="number" placeholder="id_produit" required><br><br>
        <input type="text" id="text" name="text" placeholder="nom_produit" required><br><br>
        <input type="number" id="number" name="number" placeholder="quantité" required> <br><br>
        <input type="number" id="number" name="number" placeholder="prix_unitaire" required><br><br>
        <input type="number" id="number" name="number" placeholder="prix_unitaxe" required><br><br>
        <input type="number" id="number" name="number" placeholder="id_fournisseur" required> <br><br>
        <input type="date" id="date" name="date" placeholder="date" required> <br> <br>
        <button type="submit" class="submit-btn">
            Ajouter
        </button>
    </form>
            <!-- Ajoutez ici les formulaires pour ajouter/modifier/supprimer des produits -->
            </div> <br> 
           

        </div>
            
            <button  class="btn">Ajouter un produit</button>
            <!-- Ajoutez ici les autres sections du tableau de bord (gestion des commandes, statistiques, etc.) -->




        </main>
    </div>
</body>

</html>