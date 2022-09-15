<?php
session_start();
require_once ("db.php");
$link = $_SESSION['url'];

//$_SESSION['lastproductid']  =   $_GET['id'];
//$sql = "select ID, Nom, Prix, Description  from proteines where ID = '" . $_GET['id'] . "'";
//$result = mysqli_query($mysqli, $sql);
//$row = mysqli_fetch_array($result);
//
//
//$user_email = true;
//$_SESSION['logged']= $user_email;
//$idproduct = $row["ID"];
//$nom = $row["Nom"];
//$prix = $row["Prix"];
//$description = $row["Description"];

$idproduct = $_GET["get_id"];


if (isset($_SESSION['iduser'])) {
    $iduser = $_SESSION['iduser'];
    $_SESSION['iduser'] = $iduser;
    $sql2 = "select * from panier where iduser = " . $iduser . " and idproduit = " . $idproduct ;
    $result2 = mysqli_query($mysqli, $sql2);
    $rowcount = mysqli_num_rows($result2);

        $sqldelete = "UPDATE panier SET quantite = quantite - 1 WHERE iduser = " . $iduser . " and idproduit = " . $idproduct;
        $resultdelete = mysqli_query($mysqli, $sqldelete);
    header('location: /protfinder/cart.php');


//    $idpanier = $row["ID"];


}
else{
    header('location: /protfinder/cart.php');
}