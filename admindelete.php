<?php
session_start();
require_once "db.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>

        <h1>pour deleter !!!</h1>

    <?php
      $id =  $_GET['id'];

      $sql = "delete from utilisateurs where ID = " . $id ;
      mysqli_query($mysqli, $sql);

      header("Location: /protfinder/admin.php");


    ?>

</body>
</html>