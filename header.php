
<nav id="navbar">
    <img src="img/logo.png" alt="logo">
    <h1 onclick="location.href='index.php';">ProtFinder</h1>
    <div class="onglets">
        <div class="cherch">
            <?php
            $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
                     "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .
                     $_SERVER['REQUEST_URI'];

            if($_SERVER['REQUEST_URI'] == "/protfinder/produits.php") {
                echo "
                    
            ";
            }
            ?>
<!--            <form >-->
<!--                <input type = 'search' placeholder = 'Rechercher' >-->
<!--            </form >-->
        </div>

        <div class="ongl">
            <?php
//            $admin = ($_SESSION['admin']);
//            if (isset($_SESSION['iduser']) && $admin = 2) {
//
//
//                    echo "
//                                <a href='admin.php'> <p class='link'>Admin</p> </a>
//
//                    ";
//                }

            ?>
            <p class="link" onclick="location.href='produits.php';">Produits</p></a>
<!--            <p class="link" onclick="location.href='https://fr.linkedin.com/';">Promos</p>-->
<!--            <p class="link">Packs</p>-->
        </div>



        <ul class='icons'>
            <li id='login_icon'><a href='login.php' > <p><i class='fas fa-user'></i></p> </a>
            <?php
            if (isset($_SESSION['admin'])) {
                $admin = ($_SESSION['admin']);
            }

            if (isset($_SESSION['iduser'])) {
                    $iduser = $_SESSION['iduser'];

                    echo "
                                <ul class='list'>
                                    <li><a href='account.php'>Account</a></li>
                                    <li><a href='orders.php'>Orders</a></li>
                                    <li ><a href='logout.php'>Log out</a></li>
                                </ul>
                             
                    ";
                }
                if (isset($_SESSION['iduser']) && $admin == 2) {

                    echo "
                                    <ul class='list'>
                                        <li><a href='admin.php'>Admin</a></li>
                                    </ul>   
                                    

                        ";
                }
            ?>

            </li>

            <li id='cart_icon'><a href='cart.php' id='cart' class='cart' data-totalitems='0'>
                    <p><i class='fas fa-shopping-cart'></i></p> </a>
            </li>
        </ul>

<!--        <script type="text/javascript">-->
<!---->
<!--            function inc_counter()-->
<!--            {-->
<!---->
<!--                $.ajax({-->
<!--                    url: "logout.php",-->
<!--                    context: document.body-->
<!--                }).done(function() {-->
<!--                    alert('incremented');-->
<!--                    location.reload();-->
<!--                });-->
<!--                return false;-->
<!--            }-->
<!---->
<!--        </script>-->

    </div>
</nav>