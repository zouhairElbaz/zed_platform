<?php
  session_start();
  include_once "../../scripts/php/config.php";
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
        <link rel="stylesheet" href="../../assets/css/home.css">
        <link rel="stylesheet" href="../../assets/css/user_titles.css">
        <link rel="stylesheet" href="../../assets/css/post_box.css">
        <title>Home</title>
    </head>
    <body>



    <!-- <div class="alert new-user" id="alert">
      <header>
        <h1>Welcome to ZED</h1>
      </header>
      <div class="content">
        <p>Please go to your profile and change your picture <i class="fas fa-user"></i></p>
        <p>Other pages will be available soon! <i class="fas fa-clock"></i></p>
        <p>Fore more info check the help center <i class="fas fa-info-circle"></i></p>
      </div>
      <div class="action">
        <button id="close-alert"><i class="fas fa-close"></i></button>
      </div>
    </div> -->







    <header class="page-header">
      <div class="container">
        <div class="logo">
          <a href="#">ZED - Home</a>
        </div>
        <nav>
          <ul class="links" id="links">
            <li>
              <a href="home.php" class="link active"><i class="fas fa-home"></i></a>
            </li>
            <li>
              <a href="../messages/messages.php" class="link"><i class="fas fa-envelope"></i></a>
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
          <a href="home.php" class="link active"><i class="fas fa-home"></i></a>
        </li>
        <li>
          <a href="../messages/messages.php" class="link"><i class="fas fa-envelope"></i></a>
        </li>
        <li>
          <a href="#" class="link"><i class="fas fa-users"></i></a>
        </li>
        <li>
          <a href="../profile/profile.php" class="link"><i class="fas fa-user"></i></a>
        </li>
      </ul>








    <section class="home-box">
        <div class="container">
          

        <?php
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE user_unique_id = {$_SESSION['user_unique_id']}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }
        ?>

        <section class="current-user">
          <div class="current-user-img" id="current_user_pic"></div>
          <div class="actions">
            <a href="../logout/logout.php?logout_id=<?php echo $row['user_unique_id'] ?>"><button>Logout</button></a>
          </div>
        </section>





        <!-- start the posts section  -->
        <section class="posts-section">
          
          <!-- Start post box  -->
          <section class="post-box">
            <header class="header">
              <div class="user-info">
                <div class="user-pic">
                  <img src="../../assets/images/xmsfgp.jpg" alt="user pic">
                  <span class="status"></span>
                </div>
                <div class="more">
                  <span class="user-name">ZED</span>
                  <span class="user-title staff">Admin</span>
                </div>
              </div>
              <div class="post-info">
                <span class="post-date">14/01/2024 10:20</span>
                <span class="icon"><i class="fas fa-ellipsis"></i></span>
              </div>
            </header>
            <!-- End the post header  -->
            <!-- Start the post content  -->
            <section class="post-content">
              <p class="post-text">This is the first post</p>
              <div class="post-image">
                <img src="../../assets/images/xmsfgp.jpg" alt="post image">
              </div>
            </section>
            <!-- end the post content  -->
            <!-- start the post reaction  -->
            <section class="post-reaction">
              <div class="reaction">
                <button class="action"><i class="far fa-heart"></i></button>
                <button class="action"><i class="far fa-comment"></i></button>
                <button class="action"><i class="fas fa-chart-simple"></i></button>
              </div>
              <div class="more">
                <button class="action"><i class="fas fa-share"></i></button>
              </div>
            </section>
            <!-- edn the post reaction section  -->
          </section>
          <!-- End the post box -->
        </section>
        <!-- end the posts section  -->

      </div>
    </section>
    <script src="../../../main.js"></script>
    <script src="../../scripts/js/home.js"></script>

    </body>
</html>