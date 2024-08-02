<?php
session_start();
require_once ("db.php");
if (isset($_SESSION['iduser'])) {
    $iduser = $_SESSION['iduser'];
}
if (isset($_SESSION['lastproductid'])) {
    $lastproductid = $_SESSION['lastproductid'];
}
if (!isset($_SESSION['iduser'])) {
    header('Location: /login.php');
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='viewport'
        content='minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no, viewport-fit=cover' />
    <meta property='og:type' content='website' />
    <meta property='og:title' content='protfinder' />
    <meta property='og:description' content='Site de vente de proteines' />
    <meta property='og:site_name' content='Protfinder' />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/orders.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel='shortcut icon' href='img/logo.ico' />

    <title>Protfinder</title>


</head>


<body>

    <?php require_once ("header.php"); ?>

    <?php
    $sql = "select * from commandes where iduser = " . $iduser;
    $result = mysqli_query($mysqli, $sql); ?>
    <table class="list_orders">
        <tr class="column">
            <th>N° DE COMMANDE</th>
            <th>PRODUIT</th>
            <th>QUANTITÉ</th>
            <th>MONTANT</th>
            <!--                            <th>FACTURE</th>-->
            <!--                                <th></th>-->
        </tr>
        <?php
        while ($rowproduct = mysqli_fetch_array($result)) {
            //print_r ($rowproduct);
            $arrayrow = array($rowproduct);
            //print_r ($arrayrow);
            $arr_data = [];

            //    $id = $row["ID"];
            $idproduit = $rowproduct["idproduit"];
            $sql2 = "select Nom from proteines where ID = " . $idproduit;
            $result2 = mysqli_query($mysqli, $sql2);
            $row = mysqli_fetch_array($result2);
            $nomproduit = $row["Nom"];
            //    $quantite = $row["quantite"];
//    $montant = $row["Montant"];
            ?>

            <?php
            foreach ($arrayrow as $row)
                ; {
                ?>


                <!--        <form action="../composants/pdf_facture.php?id=--><?//=$user ?><!--" method="POST">-->
                <tr></tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $nomproduit; ?></td>
                <td><?php echo $row['quantite']; ?></td>
                <td><?php echo $row['Montant'] . ' €'; ?></td>
                <!--                 <input name="cost_order2" id="input4" type="text" readonly value="--><?php //echo $row['Montant'] . ' €'; ?><!--">             -->
                <!--            <td><span class="download_pdf"><button type="submit" class="download_btn">Télécharger en format PDF</button></span></td>-->



            <?php }
        } ?>
    </table>

    <div id="footer">
        <?php require_once ("footer.php"); ?>
    </div>

</body>

</html>