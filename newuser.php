<?php
session_start();
require_once "db.php";
if (isset($_SESSION['lastproductid'])) {
        $lastproductid = $_SESSION['lastproductid'];
}
?>

<?php


//        $login = $_GET["login"];
//        $password1 = $_GET["passwordsignin"];
//        $username = $_GET["username"];
$mail = $_GET["email"];
$password2 = $_GET["passwordsignup"];
$password3 = $_GET["passwordconfirm"];
$firstname = $_GET["firstname"];
$name = $_GET["name"];
//        $phone = $_GET["phonenumber"];
$adress = $_GET["adress"];

//        $login = addslashes($login);
//        $password1 = addslashes($password1);
//        $username = addslashes($username);
$mail = addslashes($mail);
$password2 = addslashes($password2);
$password3 = addslashes($password3);
$firstname = addslashes($firstname);
$name = addslashes($name);
//        $phone = addslashes($phone);
$adress = addslashes($adress);





$sql = "insert into utilisateurs values(NULL, 1, '" . $name . "', '" . $firstname . "', NULL,
        '" . $adress . "', NULL, '" . $mail . "', '" . $password2 . "')";

mysqli_query($mysqli, $sql);

$iduser = mysqli_insert_id($mysqli);



$sql2 = "select ID, admin  from utilisateurs where ID = '" . $iduser . "'";

$resultquery = mysqli_query($mysqli, $sql2);
$row = mysqli_fetch_array($resultquery);

$admin = $row["admin"];
echo $admin;
$_SESSION['admin'] = $admin;
$_SESSION['login_user'] = $mail;
$_SESSION['iduser'] = $iduser;
$_SESSION['valid'] = true;




if (isset($_SESSION['lastproductid'])) {
        header("Location: /produit.php?id=" . $lastproductid);
} else {
        header("Location: /produits.php");
}


?>