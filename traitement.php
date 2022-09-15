<?php
session_start();
require_once "db.php";
if (isset ($_SESSION['lastproductid'])) {
    $lastproductid = $_SESSION['lastproductid'];
}

?>

     <?php
        
        $login = $_GET["login"];
        $password1 = $_GET["passwordsignin"];


        $login = addslashes($login);
        $password1 = addslashes($password1);

        
        
        $sql = "select count(*) as protfinder , ID from utilisateurs where 
             mail ='" . $login . "' and password = '" . $password1 . "'";
        
        
        
        $result = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($result);
        $resultat = $row["ID"];
        $sqladmin = "select admin from utilisateurs where mail ='" . $login . "' and password = '" . $password1 . "'";
        $resultatadmin = mysqli_query($mysqli, $sqladmin);
        $row2 = mysqli_fetch_array($resultatadmin);
        $admin = $row2["admin"];
        /*echo $row["nb"];*/
     
        
        
         /*if (($row=="nb") && ($password=="coucou"))*/
        if ($resultat > 0) {
            $_SESSION['iduser'] = $resultat;
            $_SESSION['admin'] = $admin;
            $_SESSION['login_user'] = $login;
            if (isset ($_SESSION['lastproductid'])) {
                header("Location: produit.php?id=" . $lastproductid);
            }
            else {
                $_SESSION['iduser'] = $row["ID"];
                header("Location: /protfinder/produits.php");
            }

        }
        else
        {
            header('Location: /protfinder/login.php?=e');;
        }
        

    ?>