<?php
session_start();
require_once ("db.php");
$link = $_SESSION['url'];

$idproduct = $_GET["get_id"] ;


if (isset($_SESSION['iduser'])) {
    $iduser = $_SESSION['iduser'];
    $sql2 = "select * from panier where iduser = " . $iduser . " and idproduit = " . $idproduct;
    $result2 = mysqli_query($mysqli, $sql2);
    $rowcount = mysqli_num_rows($result2);
    if ($rowcount == 0) {
        $sqladd = "insert into panier (ID, iduser, idproduit, quantite) values (NULL," . $iduser. ",
         " . $idproduct . ", 1)";
        $resultinsert = mysqli_query($mysqli, $sqladd);
//        $row = mysqli_fetch_array($resultinsert);
    }
    else {
        $sqladd = "UPDATE panier SET quantite = quantite + 1 WHERE iduser = " . $iduser . " and idproduit = " . $idproduct ;
        $resultinsert = mysqli_query($mysqli, $sqladd);
//        $row = mysqli_fetch_array($resultinsert);

    }
//    $idpanier = $row["ID"];
    header('location: /protfinder/cart.php');


}

else{
    header('location: /protfinder/cart.php');
}

//if (isset($_SESSION['lastproductid'])) {
//    $lastproductid = $_SESSION['lastproductid'];
//    $_SESSION['lastproductid'] = $lastproductid;
//    header('Location: /protfinder/produit.php?id=' . $lastproductid);
//}
//else {
//
//    header("Location: /protfinder/produits.php");
//}
?>
