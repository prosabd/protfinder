<?php
session_start();
require_once ("db.php");
unset($_SESSION['iduser']);
if (isset($_SESSION['lastproductid'])) {
    $lastproductid = $_SESSION['lastproductid'];
    $_SESSION['lastproductid'] = $lastproductid;
    header('Location: /produit.php?id=' . $lastproductid);
} else {
    header("Location: /produits.php");
}

?>