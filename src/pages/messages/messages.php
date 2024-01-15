<?php
  session_start();
  if(!isset($_SESSION['user_unique_id'])){
    header("Location: ../login/login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="this is just for testing & learning">
        <link rel="stylesheet" href="../../assets/css/normalize.css">
        <link rel="stylesheet" href="../../assets/css/all.min.css">
        <link rel="stylesheet" href="../../assets/css/animations.css">
        <link rel="stylesheet" href="../../assets/css/framework.css">
        <link rel="stylesheet" href="../../assets/css/global.css">
        <link rel="stylesheet" href="../../assets/css/messages.css">
        <title>Messages</title>
    </head>
    <body>
    <header class="page-header">
      <div class="container">
        <div class="logo">
          <a href="#">ZED - Messages</a>
        </div>
        <nav>
          <ul class="links" id="links">
            <li>
              <a href="../home/home.php" class="link"><i class="fas fa-home"></i></a>
            </li>
            <li>
              <a href="messages.php" class="link active"><i class="fas fa-envelope"></i></a>
            </li>
            <li>
              <a href="#" class="link"><i class="fas fa-users"></i></a>
            </li>
            <li>
              <a href="../profile/profile.php" class="link"><i class="fas fa-user"></i></a>
            </li>
            <li>
              <a href="#" class="link"><i class="fas fa-bars"></i></a>
            </li>
          </ul>
          <div id="menu-btn" class="icon">
            <i class="fas fa-bars"></i>
          </div>
        </nav>
      </div>
    </header>
    <ul class="phone">
        <li>
          <a href="../home/home.php" class="link"><i class="fas fa-home"></i></a>
        </li>
        <li>
          <a href="messages.php" class="link active"><i class="fas fa-envelope"></i></a>
        </li>
        <li>
          <a href="#" class="link"><i class="fas fa-users"></i></a>
        </li>
        <li>
          <a href="../profile/profile.php" class="link"><i class="fas fa-user"></i></a>
        </li>
      </ul>


      <!-- Start the messages boxes  -->
      <section class="messages-section">
        <div class="container">

        <!-- start app  -->
          <section class="app">
            <!-- Start users icons  -->
            <section class="head">
              <section class="online-friends" id="online-users-holder">






              </section>
            </section>
              <!-- En users icons  -->
              
              <!-- Start users list  -->
            <section class="users-list" id="users-list">
              
            </section>
            <!-- End users list  -->
          </section>
        <!-- close app  -->

        </div>
      </section>
      <script src="../../scripts/js/get_online_users.js"></script>
      <script src="../../scripts/js/get_all_users.js"></script>
    </body>
</html>