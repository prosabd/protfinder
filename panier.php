<?php
require_once("db.php");

$prixTotal = 0;
$nbArticle = 0;

if (isset($_SESSION["identite"]))
{
    if (isset($_POST["panier_suppr"]))
    {
        mysqli_query($conn,"DELETE FROM paniers WHERE id = " . $_POST["panier_suppr"]);
    }

    if (isset($_POST["quantiter_update_id"]))
    {
        mysqli_query($conn,"UPDATE paniers SET paniers.quantiter = " . $_POST["quantiter_update_value"] . " WHERE id = " . $_POST["quantiter_update_id"]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link href="css/style.css" rel="stylesheet">

        <script>
            function augmenterQuantiter(bouton, form_id)
            {
                var input = bouton.previousElementSibling;
                var value = parseInt(input.value, 10) + 1;
                input.value = value;

                submitForm(form_id);
            }

            function diminuerQuantiter(bouton, form_id)
            {
                var input = bouton.nextElementSibling;
                var value = parseInt(input.value, 10) - 1;
                if (value > 0)
                {
                    input.value = value;

                    submitForm(form_id);
                }
            }

            function submitForm(form_id)
            {
                var form = document.getElementById(form_id);
                form.submit();
            }
        </script>

    </head>

    <body class="body">

        <div id="main">

            <?php
            require_once("header.php");
            ?>

            <div class="panier_fond">
                <div class="panier_border">

                    <?php

                    $panierVide = false;

                    if (isset($_SESSION["identite"]))
                    {
                        $sql = "SELECT * FROM paniers WHERE paniers.id_utilisateurs = " . $_SESSION["identite"];

                        $result = mysqli_query($conn, $sql);

                        $row = mysqli_fetch_array($result);

                        if ($row != "")
                        {
                            while ($row != "")
                            {
                                $sqlArticle = "SELECT * FROM articles WHERE articles.id = " . $row["id_articles"];

                                $article = mysqli_query($conn, $sqlArticle);

                                $article = mysqli_fetch_array($article);

                                echo '<br><br><br><br>
                                    <table class="panier_table_article">
                                        <tr>
                                            <td>
                                                <img class="panier_image" src="images/articles/' . $article["nom"] . '-1.png"/>
                                            </td>
                
                                            <td style="width: 400px">
                                                <div class="panier_titre">' . $article["titre"] . '</div>
                                            </td>
                
                                            <td style="width: 200px">
                                                <div class="panier_prix">' . $article["prix"] . ' €</div>
                                            </td>
                
                                            <!--
                                            <td style="width: 200px">
                                                <input class="panier_quantiter" type="number" min="1" value="' . $row["quantiter"] . '"/>
                                            </td>-->
                
                                            <td style="width: 200px">
                                                <form action="panier.php" method="POST" id="form_' . $nbArticle . '">
                                                    <div class="counter">
                                                        <input type="hidden" name="quantiter_update_id" value="' . $row["id"] . '" />
                                                        <span class="down" onClick=\'diminuerQuantiter(this, "form_' . $nbArticle . '")\'>-</span>
                                                        <input class="counter_input" name="quantiter_update_value" type="number" value="' . $row["quantiter"] . '">
                                                        <span class="up" onClick=\'augmenterQuantiter(this, "form_' . $nbArticle . '")\'>+</span>
                                                    </div>
                                                </form>
                                            </td>
                
                                            <td style="width: 100px; text-align: right">
                                                <form action="panier.php" method="POST">
                                                    <input name="panier_suppr" type="hidden" value="' . $row["id"] . '">
                                                    <input class="bouton_rond" type="submit" value="X" />
                                                </form>
                                            </td>
                                        </tr>
                                    </table>
        
                                    <hr class="panier_hr">';

                                $prixTotal = $prixTotal + ($article["prix"] * $row["quantiter"]);
                                $nbArticle = $nbArticle + 1;

                                $row = mysqli_fetch_array($result);
                            }
                        }
                        else
                        {
                            $panierVide = true;
                        }
                    }
                    else
                    {
                        $panierVide = true;
                    }

                    if ($panierVide)
                    {
                        echo '<br> 
                                <br><br><br><br>
                                
                                <br><br><br><br>
                                
                                <br><br><br><br>
                                <h1 style="text-align: center">Vous n\'avez pas d\'article dans le panier.</h1>

        
                                <div style="text-align: center">
                                    <button type="submit" class="bouton_vert" onclick="Javascript:window.document.location.href=\'index.php\';">ACHETER SUR UBERSTREET.FR</button>
                                </div>
                                
                                <br><br><br><br>
                                
                                <br><br><br><br>
                                
                                <br><br><br><br>
                                
                                <br><br><br><br>';
                    }
                    ?>

                    <br>

                    <!--
                    <table class="panier_table_article">
                        <tr>
                            <td>
                                <img class="panier_image" src="images/batard.png"/>
                            </td>

                            <td style="width: 400px">
                                <div class="panier_titre">Titre</div>
                            </td>

                            <td style="width: 200px">
                                <div class="panier_titre">30,00 €</div>
                            </td>

                            <td style="width: 200px">
                                <input class="panier_quantiter" type="number" min="1" value="1"/>
                            </td>

                            <td style="width: 100px; text-align: right">
                                <button type="submit" class="bouton_rond"><b>X</b></button>
                            </td>
                        </tr>
                    </table>
                    -->

                </div>
            </div>

            <?php

            if($nbArticle > 0)
            {
                echo '<div class="panier_border">

                        <br>
        
                        <audio id="merci" style="display: none;">
                            <source src="css/merci.mp3" type="audio/wave" />
                        </audio>
        
                        <table style="width: 100%">
                            <tr>
                                <td>
                                    <h3>Total estimé</h3>
                                </td>
        
                                <td style="text-align: right">
                                    <h3>' . $prixTotal . ' €</h3>
                                </td>
                            </tr>
                        </table>
        
                        <div style="text-align: right">
                            <button type="submit" class="bouton_vert" onclick="document.getElementById(\'merci\').play();">VALIDER LA COMMANDE</button>
                        </div>
                    </div>';
            }
            ?>
            <!--
            <div style="text-align: right">
                <button type="submit" class="bouton_vert" onclick="document.getElementById('merci').play();">VALIDER LA COMMANDE</button>
            </div>
            -->

            <?php
            require_once("footer.php");
            ?>

        </div>

    </body>
</html>