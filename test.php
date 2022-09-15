
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
    <link rel="stylesheet" href="css/test.css" />
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <link rel='shortcut icon' href='img/logo.ico' />

    <title>Protfinder</title>


    </head>


<body>

    <section class='shopping-cart'>
        <ol class='ui-list shopping-cart--list' id='shopping-cart--list'>

            <script id='shopping-cart--list-item-template' type='text/template'>
                <li class='_grid shopping-cart--list-item'>
                    <div class='_column product-image'>

                                <img class='product-image--img' src='img/$idproduit.png' alt='' />
                                <img class='product-image--img' src='img/$idproduit.jpeg' alt='' />
                                <img class='product-image--img' src='img/$idproduit.jpg' alt='' />

                    </div>
                    <div class='_column product-info'>
                        <h4 class='product-name'> $nomproduit </h4>
                        <p class='product-desc'> $description </p>
                        <div class='price product-single-price'> $prix </div>
                    </div>
                    <div class='_column product-modifiers' data-product-price='{{=price}}'>
                        <div class='_grid'>
                            <button class='_btn _column product-subtract'>&minus;</button>
                            <div class='_column product-qty'> $quantite </div>
                            <button class='_btn _column product-plus'>&plus;</button>
                        </div>


                                    <button class='_btn entypo-trash product-remove' onclick= ''.$deleteproduit.''>Remove</button>'


                        <div class='price product-total-price'>$0.00</div>
                    </div>
                </li>
            </script>

        </ol>

    </section>

</body>
</html>