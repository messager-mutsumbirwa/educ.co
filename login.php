<?php

include '../educ.com/controler/config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:../educ.com/view/accueil1.php');
   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Login V15</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->   
   <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->   
   <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->   
   <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
   <link rel="stylesheet" type="text/css" href="css/util.css">
   <link rel="stylesheet" type="text/css" href="Login_v15/css/maine.css">
<!--===============================================================================================-->
</head>
<body>
   
   <div class="limiter">
      <div class="container-login100">
         <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url(../educ.com/Login_v15/bg.png);">
               <span class="login100-form-title-1">
                  Sign In
               </span>
            </div>

            <form class="login100-form validate-form" method="post">
               <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
               <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                  <span class="label-input100">Username</span>
                  <input class="input100" type="text" name="email" placeholder="Enter username">
                  <span class="focus-input100"></span>
               </div>

               <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                  <span class="label-input100">Password</span>
                  <input class="input100" type="password" name="password" placeholder="Enter password">
                  <span class="focus-input100"></span>
               </div>

               <div class="flex-sb-m w-full p-b-30">
                  <div class="contact100-form-checkbox">
                     <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                     <label class="label-checkbox100" for="ckb1">
                        Remember me
                     </label>
                  </div>

                  <div>
                     <a href="../educ.com/view/register.php?id=?" class="txt1">
                     do you want to register?
                     </a>
                  </div>
               </div>

               <div class="container-login100-form-btn">
                  <button class="login100-form-btn" type="submit" name="submit" value="Login" />Login
                        
                        </button>
               </div>
            </form>
         </div>
      </div>
   </div>
   
<!--===============================================================================================-->
   <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
   <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
   <script src="vendor/bootstrap/js/popper.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
   <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
   <script src="vendor/daterangepicker/moment.min.js"></script>
   <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
   <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
   <script src="js/main.js"></script>

</body>
</html>