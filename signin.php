<?php

include 'config.php';
session_start();

if (isset($_POST['submit'])) {

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if (mysqli_num_rows($select) > 0) {
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   } else {
      $message[] = 'incorrect password or email!';
   }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/sign-in.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inder:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Island Moments:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600&display=swap"
    />
  </head>
  <body>
  
  <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
      }
   }
   ?>
    <div class="sign-in6">
      <img
        class="droxford-farm-logo-21"
        alt=""
        src="./public/droxford-farm-logo-2@2x.png"
      />

      <div class="sign-in-inner">
        <div class="sign-in-container">
          <div class="sign-in7">Sign In</div>
          <div class="frame-parent75">
            <div class="frame-parent76">
              <img class="frame-icon30" alt="" src="./public/email-label.svg" />
              <form action="" method="post">
              <input class="email3" placeholder="Email" type="email"  name="email" required>
            </div>
            <div class="frame-child30"></div>
          </div>
          <div class="frame-parent77">
            <div class="layer-1-parent7">
              <img class="layer-1-icon21" alt="" src="./public/layer-11.svg" />

              <input class="password2" placeholder="Password" type="password" name="password" required>
            </div>
            <div class="component-child"></div>
          </div>
          <div class="instance-parent">
            <button class="visit-shop-wrapper24" name="submit">
              <div class="visit-shop35">Sign in</div>
            </button>
            </form>
            <div class="frame-parent78">
              <a class="frame39" href="https:www.facebook.com">
                <img class="vector-icon55" alt="" src="./public/vector2.svg" />
              </a>
              <a class="layer-1" href="https:www.google.com">
                <img class="vector-icon56" alt="" src="./public/vector3.svg" />
              </a>
            </div>
          </div>
          <div class="forgot-password-parent">
            <a class="forgot-password" href="http:yahoo.com">Forgot password</a>
            <a class="dont-have-an" href="register.php"
              >Don’t have an account</a
            >
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
