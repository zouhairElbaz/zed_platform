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
        <link rel="stylesheet" href="../../assets/css/profile.css">
        <link rel="stylesheet" href="../../assets/css/user_titles.css">
        <link rel="stylesheet" href="../../assets/css/post_box.css">
        <title>Profile</title>
    </head>
    <body>








    <header class="page-header">
        <div class="container">
            <div class="logo">
                <a href="#">ZED - Profile</a>
            </div>
            <nav>
                <ul class="links" id="links">
                    <li>
                        <a href="../home/home.php" class="link active"><i class="fas fa-home"></i></a>
                    </li>
                    <li>
                        <a href="../messages/messages.php" class="link"><i class="fas fa-envelope"></i></a>
                    </li>
                    <li>
                        <a href="#" class="link"><i class="fas fa-users"></i></a>
                    </li>
                    <li>
                        <a href="profile.php" class="link"><i class="fas fa-user"></i></a>
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
            <a href="../home/home.php" class="link active"><i class="fas fa-home"></i></a>
        </li>
        <li>
            <a href="../messages/messages.php" class="link"><i class="fas fa-envelope"></i></a>
        </li>
        <li>
            <a href="#" class="link"><i class="fas fa-users"></i></a>
        </li>
        <li>
            <a href="profile.php" class="link"><i class="fas fa-user"></i></a>
        </li>
    </ul>








    <section class="profile-box">
        <div class="container">
            <!-- Top section start  -->
            <section class="top" id="user-info-holder">
                <!-- ############################### 
            
            the user info will be here


            #######################################
            -->
            </section>
            <!-- Top section end  -->

            <!-- user posts section Start -->
            <section class="posts-section">
                <!-- start the post box -->
                <section class="post-box">
                    <header class="header">
                    <div class="user-info">
                        <div class="user-pic">
                        <img src="../../assets/users_images/default_profile.jpg" alt="user pic">
                        <span class="status"></span>
                        </div>
                        <div class="more">
                        <span class="user-name">Your name</span>
                        <span class="user-title staff">Your title</span>
                        </div>
                    </div>
                    <div class="post-info">
                        <span class="post-date">1/2/23 10:22</span>
                        <span class="icon"><i class="fas fa-ellipsis"></i></span>
                    </div>
                    </header>
                    <!-- End the post header  -->
                    <!-- Start the post content  -->
                    <section class="post-content">
                    <p class="post-text">This is your default post!</p>
                    <div class="post-image">
                        <img src="../../assets/users_images/default_profile.jpg" alt="post image">
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
            <!-- user posts section end  -->
        </div>
    </section>


    <script src="../../scripts/js/profile.js"></script>
    </body>
</html>