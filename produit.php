<?php
session_start();
require_once ("db.php");
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
        "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .
    $_SERVER['REQUEST_URI'];
$_SESSION['url'] = $link;
?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name='viewport' content='minimum-scale=1, initial-scale=1, width=device-width, shrink-to-fit=no, viewport-fit=cover' />
        <meta property='og:type' content='website' />
        <meta property='og:title' content='protfinder' />
        <meta property='og:description' content='Site de vente de proteines' />
        <meta property='og:site_name' content='Protfinder' />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="css/styleproduit.css" />
        <link rel="stylesheet" href="css/header.css"/>
        <link rel="stylesheet" href="css/footer.css"/>
        <link rel='shortcut icon' href='img/logo.ico' />

        <title>Protfinder</title>


    </head>
    

   <body>
   
   <?php require_once("header.php");?>


    <?php
    $_SESSION['lastproductid']  =   $_GET['id'];
    $urllastproduct = $_SERVER['QUERY_STRING'];
    $sql = "select ID, Nom, Prix, Description  from proteines where ID = '" . $_GET['id'] . "'";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($result)) {


    $user_email = true;
    $_SESSION['logged']= $user_email;
    $idproduct = $row["ID"];
    $nom = $row["Nom"];
    $prix = $row["Prix"];
    $description = $row["Description"];
    $_SESSION['idproduit'] = $idproduct;


//    if (isset($_SESSION['iduser'])) {
//        $iduser = $_SESSION['iduser'];
//        $_SESSION['iduser'] = $iduser;
//        $sql2 = "select * from panier where idproduit = '" . $idproduct. "' and iduser ='" . $iduser . "'";
//        $result2 = mysqli_query($mysqli, $sql2);
//        $rowcount = mysqli_num_rows($result2);
//        if ($rowcount = 0) {
//            $sqladd = "insert into panier values(NULL,'" . $iduser. "', '" . $idproduct . "', 1)";
//            $resultinsert = mysqli_query($mysqli, $sqladd);
//        }
//        else {
//            $sqladd = "UPDATE panier SET quantite = quantite + 1 WHERE iduser = '" . $iduser . "' and idproduit = '" . $idproduct . "'";
//            $resultinsert = mysqli_query($mysqli, $sqladd);
//            $sqldelete = "UPDATE panier SET quantite = quantite - 1 WHERE iduser = '" . $iduser . "' and idproduit = '" . $idproduct . "'";
//            $resultdelete = mysqli_query($mysqli, $sqldelete);
//            $sqlremove = "DELETE from panier where iduser = '" . $iduser . "' and idproduit = '" . $idproduct . "'";
//            $resultremove = mysqli_query($mysqli, $sqlremove);
//        }
//        $idpanier = $row["ID"];
//        echo $rowcount;
//
//    }




    echo "
               <div class='divproduit' >
                <div class='produit' >
                 <input type='hidden' name='get_id' value = ".$idproduct." />
                  <div class='imgproduit'>
                      <img src='img/". $idproduct . ".png' alt='' height='250px'>
                      <img src='img/". $idproduct . ".jpg' alt='' height='250px'>
                      <img src='img/". $idproduct . ".jpeg' alt='' height='250px'>
                  </div>
                    <div class='infosproduit'>
                        <div class='nameproduit'>".Strtoupper($nom)."</div>
                        <div class='prixproduit'>".$prix." $</div>
                        <div class='categorieproduit'>".
                        substr_replace($description,'...',140)."
                           <button onclick='myFunction()' id='myBtn' style='display: none;'>
                                <span id='dots'>...</span><span id='more'></span>
                           </button>
                        </div>";
                        if( !isset($_SESSION['iduser'])){
                            echo "
                                <div class='buttonaddtocart' onclick='window.location.href=`login.php`'>
                                    <button id='addtocart' class='addtocart' >
                                        <div class='addItem'>
                                            <i class='fas fa-cart'></i> ADD TO CART
                                       </div>
                                       <div class='addedItem' onmouseleave='mouseOut(this)'>
                                          <div class='posttext'>
                                              <i class='fas fa-check'></i> ADDED
                                          </div>
                                       </div>
                                    </button>
                                </div>  
                    </div>
                </div>
               </div>                                             
                                ";
                        }
                        else {
                            echo "
                                <div class='buttonaddtocart'  >
                                    <button id='addtocart' class='addtocart' onclick='javascript:return addproduit()'>
                                        <div class='addItem'>
                                            <i class='fas fa-cart'></i> ADD TO CART
                                       </div>
                                       <div class='addedItem' onmouseleave='mouseOut(this)'>
                                          <div class='posttext'>
                                              <i class='fas fa-check'></i> ADDED
                                          </div>
                                       </div>
                                       <span class='cart-item'></span>
                                    </button>
                                </div>  
                    </div>
                </div>
               </div>            
                            ";
                       }

                        /*<div class='buttonaddtocart' >
                            <button id='addtocart' class='addtocart' >
                                <div class='addItem'>
                                    <i class='fas fa-cart'></i> ADD TO CART
                               </div>
                               <div class='addedItem' onmouseleave='mouseOut(this)'>
                                  <div class='posttext'>
                                      <i class='fas fa-check'></i> ADDED
                                  </div>
                               </div>
                            </button>
                        </div>    
                    </div>
                </div>
               </div>
               
            ";*/


          

        }
        ?>


   <div id="footer">
       <?php require_once("footer.php");?>
   </div>

   <script src="js/produit.js"></script>

    </body>

    

</html>
