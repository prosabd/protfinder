<?php
session_start();
require_once "db.php";

?>

<!DOCTYPE html>
<html>

  <head>
    <title>Edition</title>
    <meta charset="utf8"/>
  </head>

  <body>
        <?php
        $id = $_GET["id"];
        $sql = "select Prenom, Nom, Adresse, Telephone, Username, admin, mail, password from utilisateurs where ID = " . $id;
        $result = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($result);
        
        ?>


    <form action ="admintraitedit.php" method = "GET" >
        <p>
            <input type="hidden" name="id" value="<?php echo $id ?>" />
        </p>
        <p>
            Prénom : <input type="text" name="Prenom" value="<?php echo $row["Prenom"] ?>" />
        </p>
        <p>
            Nom  : <input type="text" name="Nom" value="<?php echo $row["Nom"] ?>" />
        </p>
        <p>
            Username : <input type="text" name="Username" value="<?php echo $row["Username"] ?>" />
        </p>
        <p>
            Adress : <input type="text" name="Adress" value="<?php echo $row["Adresse"] ?>" />
        </p>
        <p>
            Telephone : <input type="text" name="Telephone" value="<?php echo $row["Telephone"] ?>" />
        </p>
        <p>
            Mail : <input type="mail" name="Mail" value="<?php echo $row["mail"] ?>" />
        </p>
        <p>
            Password : <input type="text" name="Password" value="<?php echo $row["password"] ?>" />
        </p>
        <p>
            Admin : <input type="text" name="Admin" value="<?php echo $row["admin"] ?>" />
        </p>
        
        
        <p>
            <input type="submit" value = "Modifier" />
        </p>
    </form>

  </body>

</html>
