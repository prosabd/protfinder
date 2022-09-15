<?php
session_start();
require_once ("db.php");
unset($_SESSION['lastproductid']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name='viewport' content='minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no, viewport-fit=cover' />
  <meta property='og:type' content='website' />
  <meta property='og:title' content='protfinder' />
  <meta property='og:description' content='Site de vente de proteines' />
  <meta property='og:site_name' content='Protfinder' />
  <title>ProtFinder</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="css/stylepr.css">
  <link rel="stylesheet" href="css/header.css"/>
  <link rel="stylesheet" href="css/footer.css"/>
  <link rel="icon" href="img/logo.ico">
</head>
<body>

    <?php include ("header.php");?>

  
  <!-- Header -->
   <header>
     <h1>C'est votre boutique, votre chez-vous.</h1>
     <a href="produits.php"><button>Découvrir<i class="fas fa-paper-plane"></i></button></a>
   </header>
  <!-- Fin du header -->
  
  <!-- Section principale -->
  <section class="main">
    
    <!-- Toutes les cartes -->
    
    <div class="cards">
      <a href="produit.php?id=1">
      <div class="card">
        <img src="img/1.jpg">
        <div class="card-header">
          <h4 class="title">boisson banane</h4>
          <br>
          <h4 class="price">24.99$</h4>
        </div>
        <div class="card-body">
          <p>pack de 8 boissons banane</p>
        </div>
      </div>
      </a>
      <a href="produit.php?id=2">
      <div class="card">
        <img src="img/2.jpg">
        <div class="card-header">
          <h4 class="title">boisson chocolat menthe</h4>
          <h4 class="price">24.99$</h4>
        </div>
        <div class="card-body">
          <p>pack de 8 boissons chocolat menthe</p>
        </div>
      </div>
      </a>
      <a href="produit.php?id=3" >
      <div class="card">
        <img src="img/3.jpg">
        <div class="card-header">
          <h4 class="title">boisson beurre de cacahuete</h4>
          <h4 class="price">24.99$</h4>
        </div>
        <div class="card-body">
          <p>pack de 8 boissons beurre de cacahuete</p>
        </div>
      </div>
      </a>
     </div>
    <!-- Fin de toutes les cartes -->
  </section>
  <!-- Fin de la section principale -->

    <div id="footer">
        <?php require_once("footer.php");?>
    </div>
</body>
</html>