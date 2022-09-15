<?php
require_once("db.php");
?>

<?php
$_SESSION["identite"] = null;

if (count($_POST) > 0) {
    $email = $_POST["email"];
    $mdp = $_POST["password"];
    $nom = $_POST["nom"];
    $prenom = $_POST["Prenom"];
    $adresse = $_POST["Adresse"];
    $telephone = $_POST["Telephone"];


    $sql ="insert into utilisateurs values(null, '" . $nom . "','" . $prenom . "','" . $adresse . "','" . $telephone . "','" . $email . "','" . $mdp . "')";
    mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link rel="shortcut icon" href="logourl.PNG">
    <link rel="stylesheet" href="css/styl.css">
    <link rel="stylesheet" href="css/footer.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>
    <div class="pageinscription">
        <form action="inscription.php" method="POST">
            <div class="logo">
                <img src="img/logo.png" alt="logo" width="300">
            </div>
            <h1>Inscription</h1>
            <div class="nom">
                <p class="choose-nom">Votre Nom:</p>
            </div>
            <input type="text" placeholder="Votre Nom" id="nom" name="nom"/>

            <div class="Prenom">
                <p class="choose-prenom">Votre Prénom:</p>
            </div>
            <input type="text" placeholder="Votre Prénom" id="prenom" name="prenom"/>

            <div class="Adresse">
                <p class="choose-adresse">Votre Adresse:</p>
            </div>
            <input type="text" placeholder="Votre Adresse" id="adresse" name="adresse"/>

            <div class="Telephone">
                <p class="choose-adresse">Votre numéro de téléphone:</p>
            </div>
            <input type="text" placeholder="Votre numéro" id="telephone" name="telephone"/>

            <div class="emailsmy">
                <p class="choose-email">Email</p>
            </div>
            <div class="inputs">
                <input type="email" placeholder="Your email" id="email" name="email"/>
                <div class="passwordfp">
                <p class="password">Password</p>
            </div>
            <input type="password" placeholder="Password" id="mdp" name="mdp"/>
            </div>

            <div class="button">
                <center><button  type="submit" name="submit" >Login</button></center>
            </div>




            <center><p class="inscription">I have an account, <span>login now!</span></p></center>
        </form>
    </div>
        <div id="footer">
           <?php require_once("footer.php");?>
        </div>


</body>
</html>



