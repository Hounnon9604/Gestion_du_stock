<?php
session_start();
require('database.php');
if(isset($_POST['valid'])){
    if(isset($_POST['nom'],$_POST['password']) AND !empty(trim($_POST['nom'])) AND !empty(trim($_POST['password'])) )
    {
        $nom=htmlspecialchars($_POST['nom']);
        $password=htmlspecialchars($_POST['password']);
        $query="SELECT * FROM lodin_client WHERE nom='$nom' AND mot_de_passe='$password' ";
        $lodin_client=mysqli_query($conn,$query);
        // $admins=$admins->execute([
        //     htmlspecialchars($_POST['email']),
        // //    sha1(htmlspecialchars($_POST['password'])),
        // htmlspecialchars($_POST['password'])
        // ]);
        
        if(mysqli_num_rows($lodin_client)>0){
            $client=mysqli_fetch_assoc($lodin_client);
            $_SESSION['id']=$admin['id'];
            header('location: index.html');
        }else{
            $error='Mot de passe ou email incorrect';
        }
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
  <title>Connexion client</title>
  <!-- Link vers Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


  <style>
    body {
      font-family: Arial, sans-serif;
      /* background-color: rgba(207, 22, 118, 0.654); */
      background-size: cover;
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
      margin-top: 100px;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    img{
        height: 100px;
    }
    
    h2{
        text-align: center;
    }
    .form-group {
      margin-bottom: 20px;
    }
    label {
      display: block;
      font-weight: bold;
      font-size: 1.5rem;
    }
    input[type="text"],
    input[type="password"] {
      width: 95%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    input[type="text"],input[type="password"]:hover{
        outline: none;
    }
    .submit-btn {
      background-color: #0a47e2;
      color: #fff;
      padding: 10px 20px;
      font-size: 1.5rem;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    .fa-lock {
      margin-right: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- <img src="img/avatar.png" alt=""> -->
    <h2 class="mb-4 ">Client</h2>
    <form id="loginForm" method="post" action="" >
    <?php if(isset($error)) {
                ?>
                <p style="color:red"> <?=$error ?></p>
                <?php
            }  ?>
      <div class="form-group">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>
      </div>
      <div class="form-group">
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" name="valid" class="submit-btn">
        <i class="fas fa-lock"></i>Se connecter
      </button>
    </form>
  </div>

  <!-- Link vers Font Awesome JS (doit être inclus avant la balise </body>) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

</body>
</html>
