<?php
session_start();
require_once ("db.php");
if (isset($_SESSION['iduser'])) {
    $iduser = $_SESSION['iduser'];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='viewport'
        content='minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no, viewport-fit=cover' />
    <meta property='og:type' content='website' />
    <meta property='og:title' content='protfinder' />
    <meta property='og:description' content='Site de vente de proteines' />
    <meta property='og:site_name' content='Protfinder' />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/styleproduit.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel='shortcut icon' href='img/logo.ico' />

    <title>Protfinder</title>


</head>


<body>
    <?php
    $sql = "select * from panier where iduser = '" . $iduser . "'";
    $result = mysqli_query($mysqli, $sql);
    $rowcount = mysqli_num_rows($result);
    if ($rowcount == 0) {
        header('location: /produits.php');
    } else {


        $priceproduct = 0;
        $nomcommande = 0;
        while ($row = mysqli_fetch_array($result)) {
            $idproduit = $row["idproduit"];
            $quantite = $row["quantite"];
            $_SESSION['idproduit'] = $idproduit;

            $ID = $row["ID"];

            $sqlproduit = "select * from proteines where id =" . $idproduit;
            $resultproduit = mysqli_query($mysqli, $sqlproduit);
            $rowproduit = mysqli_fetch_array($resultproduit);
            $nomproduit = $rowproduit["Nom"];
            //        $nomcommande += $nomproduit;
            $description = $rowproduit["Description"];
            $prix = $rowproduit["Prix"];
            $priceproduct += $prix * $quantite;
            if (isset($_SESSION['iduser'])) {
                $iduser = $_SESSION['iduser'];
                $sqladd = "insert into commandes (ID, iduser, idproduit, quantite, Montant) values (NULL," . $iduser . ",
                " . $idproduit . "," . $quantite . ", " . $priceproduct . ")";
                $resultinsert = mysqli_query($mysqli, $sqladd);

                //    $rowcount = mysqli_num_rows($result);
                //    if ($rowcount == 0) {
                //        $row = mysqli_fetch_array($resultinsert);
    
                $sqlremove = "DELETE from panier where iduser = " . $iduser . " and idproduit = " . $idproduit;
                $resultremove = mysqli_query($mysqli, $sqlremove);

                $priceproduct = 0;

            } else {
                header('location: /login.php');
            }
        }
    }
    header('location: /orders.php');
    //$link = $_SESSION['url'];
    
    //$idproduct = $_GET["get_id"] ;
//$nameproduct = $_GET["get_name"];
//
////$priceproduct += $priceproduct;
////echo $priceproduct;
//$quantity = $_GET["get_quantity"];
    


    //if (isset($_SESSION['lastproductid'])) {
//    $lastproductid = $_SESSION['lastproductid'];
//    $_SESSION['lastproductid'] = $lastproductid;
//    header('Location: /produit.php?id=' . $lastproductid);
//}
//else {
//
//    header("Location: /produits.php");
//}
    ?>