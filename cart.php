<?php
session_start();
require_once "db.php";
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
    <link rel="stylesheet" href="css/cart.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel='shortcut icon' href='img/logo.ico' />

    <title>Protfinder</title>


</head>


<body>

    <?php require_once ("header.php"); ?>

    <div class="main">
        <h1>Shopping cart</h1>
        <section class='shopping-cart'>

            <?php
            $sql = "select * from panier where iduser = '" . $iduser . "'";
            $result = mysqli_query($mysqli, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $idproduit = $row["idproduit"];
                $quantite = $row["quantite"];
                $_SESSION['idproduit'] = $idproduit;

                $ID = $row["ID"];

                $sqlproduit = "select * from proteines where id =" . $idproduit;
                $resultproduit = mysqli_query($mysqli, $sqlproduit);
                $rowproduit = mysqli_fetch_array($resultproduit);
                $nomproduit = $rowproduit["Nom"];
                $description = $rowproduit["Description"];
                $prix = $rowproduit["Prix"];

                echo "

        
            <ol class='ui-list shopping-cart--list' id='shopping-cart--list'>

                <div id='shopping-cart--list-item-template' type='text/template'>
                    <li class='_grid shopping-cart--list-item'>
                        <div class='_column product-image' id='height_img'>

                            <img class='product-image--img' src='img/" . $idproduit . "' alt='' height='100%'/>
                            

                        </div>
                        <div class='_column product-info'>
                            <h4 class='product-name'> " . $nomproduit . " </h4>
                            <p class='product-desc'> " . $description . " </p>
                            <div class='price product-single-price'> " . $prix . " $ </div>
                        </div>
                        <div class='_column product-modifiers' data-product-price='{{=price}}'>
                            <div class='_grid' style='margin-bottom: 50px !important;display: -webkit-box;'>
                                <form class='hhhh' action='deleteproduit.php''  method='GET' s>
                                   <input type='hidden' name='get_id' value = " . $idproduit . " />  
                                <button class='_btn _column product-subtract' onclick='javascript: return deleteproduit()'>&minus;</button></a>
                                </form>   
                                <div class='_column product-qty' id='quant'> " . $quantite . " </div>
                                <form class='hhhh' action='addproduit2.php' method='GET' >
                                   <input type='hidden' name='get_id' value = " . $idproduit . " />  
                                <button class='_btn _column product-plus' onclick='javascript: return addproduit()'>&plus;</button>
                                </form>
                            </div>


                            <form class='hhhh' action='removeproduit.php' method='GET' >
                               <input type='hidden' action='' name='get_id' value = " . $idproduit . " />  
                            <button class='_btn entypo-trash product-remove' onclick= 'javascript: return removeproduit()'>Remove</button>
                            </form>


                            <div class='price product-total-price'>$0.00</div>
                        </div>
                    </li>
               
                </div>
            </ol>
            
        ";

            }
            ?>

            <div class="_grid cart-totals">
                <!--                <div class="_column subtotal" id="subtotalCtr">-->
                <!--                    <div class="cart-totals-key">Subtotal</div>-->
                <!--                    <div class="cart-totals-value">$0.00</div>-->
                <!--                </div>-->

                <div class="_column taxes" id="taxesCtr">
                    <div class="cart-totals-key">Taxes (6%)</div>
                    <!--                    <div class="cart-totals-value">$0.00</div>-->
                </div>
                <div class="_column total" id="totalCtr">
                    <div class="cart-totals-key">Total</div>
                    <form method="GET">
                        <input class="cart-totals-value" type="hidden" name="totalprice" value="$0.00" />
                    </form>
                    <!--                        <div class="cart-totals-value">$0.00</div>-->
                </div>
                <div class="_column checkout">
                    <form class='hhhh' action='cartvalidation.php' method='GET'>

                        <!--                        <input type='hidden' name='get_id' value = "--><?//= $idproduit ?><!--" />-->
                        <!--                        <input type='hidden' name='get_name' value = "--><?//= $nomproduit ?><!--" />-->
                        <!--                        <input type='hidden' name='get_price' value = "--><?//= $prix ?><!--" />-->
                        <!--                        <input type='hidden' name='get_quantity' value = "--><?//= $quantite ?><!--" />-->
                        <button type="submit" class="_btn checkout-btn entypo-forward">Checkout</button>
                    </form>
                </div>
            </div>

        </section>



    </div>



    <?php

    //$sql = "select * from panier where iduser = '" . $iduser . "'";
//$result = mysqli_query($mysqli, $sql);
//while ($row = mysqli_fetch_array($result)) {
//    $idproduit = $row["idproduit"];
//    $quantite = $row["quantite"];
//
//    $ID = $row["ID"];
//
//    $sqlproduit = "select * from proteines where id =" . $idproduit;
//    $resultproduit = mysqli_query($mysqli, $sqlproduit);
//
//    while ($rowproduit = mysqli_fetch_array($resultproduit)) {
//        $nomproduit = $rowproduit["Nom"];
//        $prix = $rowproduit["Prix"];
//
//        echo "<div class='panier' >
//      <form class='produitcart' action='hello.php' method='GET'>
//      <img  src='img/" . $idproduit . ".jpeg'  height='80px' width='80px' alt='' name='image'>
//      <img  src='img/" . $idproduit . ".png'  height='80px' width='80px' alt='' name='image'>
//      <img  src='img/" . $idproduit . ".jpg'  height='80px' width='80px' alt='' name='image'>
//      <p> $nomproduit </p>
//      <p> Quantité : $quantite </p>
//     <div>
//       <select name='qte'>
//      <option value='1'>1</option>
//      <option value='2'>2</option>
//      <option value='3'>3</option>
//      <option value='4'>4</option>
//      <option value='5'>5</option>
//    </select>
//    <button type='submit'>Modifier</button>
//    </div>
//    <input type='hidden' name='idsympa' value = $ID />
//    </form>
//    <form class='hello' action='trairdeletepan.php' method='GET'>
//
//      <button type='submit'>suprimer</button>
//      <input type='hidden' name='idsympa' value = $ID />
//      </form>
//   </div>
//
//                     ";
//    }
//}
//echo "
//  <form class='hhhh' action='commander.php' method='GET'>
//
//  <button type='submit'>Commander et payer</button>
//  <input type='hidden' name='idsympa' value = $idproduit />
//  </form>"
// ?>
    <!---->
    <!--    pour modifier la quantité pour un article-->
    <?php //          $nquan = $_GET["qte"];
//      $idsympa = $_GET["idsympa"];
//      ?>
    <!---->
    <?php
    //
//
//$sql = "UPDATE panier SET quantite= " . $nquan . " WHERE ID="  .  $idsympa;
//
//
//
//mysqli_query($mysqli, $sql);
//
//header("Location: /mgt.syp/.php");
    
    ?>

    <div id="footer">
        <?php require_once ("footer.php"); ?>
    </div>


    <script src=" js\cart.js"></script>

</body>

</html>