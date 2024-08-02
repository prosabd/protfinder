<?php
session_start();
require_once "db.php";
if (!isset($_SESSION['admin'])) {
    header('Location: /login.php');
}
if ($_SESSION['admin'] != 2) {
    header('Location: /login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>

<body>
    <table border="2px">
        <?php
        $sql = "select Prenom, Nom, Adresse, Username, Telephone, mail, password, admin, ID from utilisateurs";
        $result = mysqli_query($mysqli, $sql);
        echo "<tr>";
        echo "<th>Prenom</th>";
        echo "<th>Nom</th>";
        echo "<th>Adresse</th>";
        echo "<th>Username</th>";
        echo "<th>Telephone</th>";
        echo "<th>mail</th>";
        echo "<th>password</th>";
        echo "<th>admin</th>";
        echo "<th>ID</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["Prenom"] . "</td>";
            echo "<td>" . $row["Nom"] . "</td>";
            echo "<td>" . $row["Adresse"] . "</td>";
            echo "<td>" . $row["Username"] . "</td>";
            echo "<td>" . $row["Telephone"] . "</td>";
            echo "<td>" . $row["mail"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "<td>" . $row["admin"] . "</td>";
            echo "<td>" . $row["ID"] . "</td>";
            $id = $row["ID"];

            $ligne = "<a href='/admindelete.php?id=" . $id . "'>
            <img src = '/img/cross.png' width ='30px'/> </a>";
            //echo "<td>" . "<img src='../ariane/img/cross.png' height=10px>" . "</td>";
            echo "<td>" . $ligne . "</td>";

            $ligneEdit = "<a href='/adminedit.php?id=" . $id . "'>
            <img src = '/img/edit.png' width ='30px'/> </a>";
            echo "<td>" . $ligneEdit . "</td>";



            echo "</tr>";
        }


        ?>
    </table>

    <!-- <a href="/ariane/delete.php?id=54264d2s65g4"> <img src = '/ariane/img/cross.png' width ='30px'/> </a> -->

</body>

</html>