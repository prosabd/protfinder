<?php
session_start();
require_once ("db.php");
unset($_SESSION['lastproductid']);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='viewport' content='minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no, viewport-fit=cover' />
    <meta property='og:type' content='website' />
    <meta property='og:title' content='protfinder' />
    <meta property='og:description' content='Site de vente de proteines' />
    <meta property='og:site_name' content='Protfinder' />
    <meta property='og:url' content='https://protfinder.ext' />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
    <link rel="stylesheet" href="css/styleproduits.css" />
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <link rel='shortcut icon' href='img/logo.ico' />

    <title>Protfinder</title>
</head>


<body>
<?php require_once("header.php");?>

    <div class="divpageproduits">
        </br>
        <div class="filtresproduits">
             <h1>Filtres</h1>
        </div>
    
        <div class="divproduits">
            <?php
            // $sql = "CALL listproducts"; 
            // For the final test i had to do a stored procedure but for the host service i couldn't manage stored procedure so i stayed on declared SQL query  
            $sql = "select ID, Nom, Prix, Categorie  from proteines";
            $result = mysqli_query($mysqli, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $idproduct = $row["ID"];
                $nom = $row["Nom"];
                echo "
                    <a href='produit.php?id=".$idproduct."'>
                    <div class='produits'>
                      <div class='imgproduits'>
                          <img src='img/". $idproduct . ".png' alt='' height='90px'>
                          <img src='img/". $idproduct . ".jpg' alt='' height='90px'>
                          <img src='img/". $idproduct . ".jpeg' alt='' height='90px'>
                      </div>
                        <div class='infosproduits'>
                            <div class='nameproduits'>".Strtoupper($row["Nom"])."</div>
                            <div class='prixproduits'>".$row["Prix"]."$</div>
                        </div>
                    </div>
                    </a>
                ";
    
            }
            ?>
            
        </div>
    </div>

    
    
    <div id="footer">
        <?php require_once("footer.php");?>
    </div>

</body>

</html>