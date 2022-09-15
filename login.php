<?php
session_start();
require_once ("db.php");
if (isset($_SESSION['lastproductid'])) {
    $lastproductid = $_SESSION['lastproductid'];
    $_SESSION['lastproductid'] = $lastproductid;
}
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="css/login.css" />
        <link rel="stylesheet" href="css/header.css"/>
        <link rel="stylesheet" href="css/footer.css"/>
        <link rel='shortcut icon' href='img/logo.ico' />
<!--        <style>--><?php
//            if (strpos($url, "?=e") !== false){
//                echo"
//                #login {
//                    border:red solid 1px;
//                }
//                #passwordsigin {
//                    border:red solid 1px;
//                }
//                ";
//            }
//            else{
//                echo "
//                #logininvalid{
//                    display: none !important;
//                }
//                #login {
//                    border:red solid 0px;
//                }
//                #passwordsigin {
//                    border:red solid 0px;
//                }
//                ";
//            }
//            ?>
<!--            </style>-->

        <title>Protfinder</title>



    </head>


   <body>

   <?php require_once("header.php");
   $url = $_SERVER['QUERY_STRING'];
   $key = "?=e";
   $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
           "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .
       $_SERVER['REQUEST_URI'];

   ?>



<div class="loginblock">
   <div class="container" id="container">
       <div class="form-container sign-up-container">
<!--           <iframe style="display:none;" src="newuser.php" name="iframesignup"></iframe>-->
               <form method="GET" action="newuser.php" onsubmit="return formvalidation()" name="formsignup" >
               <h1>Create Account</h1>
               <!--<div class="social-container">
                   <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                   <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                   <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
               </div>-->
               <span>or use your email for registration</span>

               <div id="identitysignup">
                   <input type="text" name="firstname" placeholder="First Name" id="firstname" required/>
                   <input type="text" name="name" placeholder="Name" required/>
               </div>

       <!--    <input type="text" name="username" placeholder="Username" id="username" required/>
               <span id="usernameinvalid">Les caracteres suivants ne sont pas acceptes : !@#$%^&*()-+<></span>
       -->
               <input type="email" name="email" placeholder="Email" id="mailsignup" " required/>
               <span id="mailinvalid">Format invalide</span>

               <div id="passwordsignupblock">
                   <input type="password" name="passwordsignup" placeholder="Password" id="passwordsignup"
                          class="passwordsignin"  required/>
                   <i class="bi bi-eye-slash" id="togglePassword"></i>

                   <button id="buttonpassword" onclick="genPassword()">Generate</button>


               </div>

                    <span id="passwordinvalid">Invalid Password ! </br>
                        Votre mot de passe doit contenir une majuscule, un chiffre et un caractere special.
                    </span>
                    <span id="passwordinvalidminheight">Votre mot de passe doit faire minimum 8 caracteres !
                    </span>
                    <span id="passwordinvalidmaxheight">Votre mot de passe doit faire maximum 50 caracteres !
                    </span>

               <div id="passwordconfirmsignupblock">
                   <input type="password" name="passwordconfirm" placeholder="Password Confirm" id="passwordconfirmsignup"
                          class="passwordconfirmsignin"  required/>
                   <i class="bi bi-eye-slash" id="toggleconfirmPassword"></i>


               </div>

                  <span id="confirmPasswordinvalid">Invalid Password Confirmation !
                  </span>

               <!--
                    <input type="tel" name="phonenumber" placeholder="Phone Number" required/>
                -->
                    <input type="text" name="adress" placeholder="Adress (CP, City)" required/>

               <button id="signup">Sign Up</button>
           </form>
       </div>
       <div class="form-container sign-in-container">
<!--           <iframe style="display: none;" src="traitement.php" name="iframesignin"></iframe>-->
           <form action="traitement.php" method="GET">
               <h1>Sign in</h1>
               <!--<div class="social-container">
                   <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                   <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                   <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
               </div>-->
               <span>or use your account</span>
           <?php
           if ($_SERVER['REQUEST_URI'] == "/protfinder/login.php"){
               echo "
                <input id='login' type='email' name='login' placeholder='Email' required/>
                <div id='passwordsigninblock'>
                <input id='passwordsignin' type='password' name='passwordsignin' placeholder='Password' required/>
                <i class='bi bi-eye-slash' id='togglePasswordsignin'></i>
                </div>
                ";
           }
           else{
               echo "
                <span id='logininvalid' style='display: flex; margin-top: 20px; margin-bottom: 10px; font-size: 20px; color: red;'>
                       Identifiant ou mot de passe incorrect
                </span>";
               echo "
                  <input id='login' type='email' name='login' placeholder='Email' style='border: red solid 1px' required/>
                  <div id='passwordsigninblock'>
                  <input id='passwordsignin' type='password' name='passwordsignin' placeholder='Password' style='border: red solid 1px' required/>
                  <i class='bi bi-eye-slash' id='togglePasswordsignin'></i>
                  </div>
                  <script>
//                document.getElementById('login').style.border = 'red solid 2px';
//                document.getElementById('passwordsignin').style.border = 'red solid 2px';
                </script>";
           }
           ?>

<!--               <input id="login" type="email" name="login" placeholder="Email" required/>-->
<!--               <input id="passwordsignin" type="password" name="passwordsignin" placeholder="Password" required/>-->

           <!-- <a href="#">Forgot your password?</a>-->
               <button style="margin-top: 10px"><input type="submit" id="signin" style="display: none">Sign In</input></button>
           </form>
       </div>
       <div class="overlay-container">
           <div class="overlay">
               <div class="overlay-panel overlay-left">
                   <h1>Hello, Friend!</h1>
                   <p>Enter your personal details and start journey with us</p>
                   <button class="ghost" id="signIn">Sign In</button>
               </div>
               <div class="overlay-panel overlay-right">
                   <h1>Welcome Back!</h1>
                   <p>To keep connected with us please login with your personal info</p>
                   <button class="ghost" id="signUp">Sign Up</button>
               </div>
           </div>
       </div>
   </div>
</div>


   <div id="footer">
       <?php require_once("footer.php");?>
   </div>

   <script src="js/login.js"></script>


   </body>



</html>


