<?php
session_start();
require_once "db.php";
?>

<?php
$iduser = $_GET["iduser"];
$sql = "UPDATE utilisateurs SET Prenom='" . $_GET["Prenom"] . "', Nom='" . $_GET["Nom"] .
  "', Adresse='" . $_GET["Adress"] . "', Username='" . $_GET["Username"] . "', Telephone='" . $_GET["Telephone"] .
  "', mail='" . $_GET["mail"] . "', password='" . $_GET["password"] . "', admin='" . $_GET["admin"] .
  "' WHERE ID=" . $iduser;

mysqli_query($mysqli, $sql);

header("Location: /produits.php");

