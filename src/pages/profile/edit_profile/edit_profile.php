<?php
    session_start();
    if(!isset($_SESSION['user_unique_id'])){
        header("Location: ../../login/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="this is just for testing & learning">
        <link rel="stylesheet" href="../../../assets/css/normalize.css">
        <link rel="stylesheet" href="../../../assets/css/all.min.css">
        <link rel="stylesheet" href="../../../assets/css/animations.css">
        <link rel="stylesheet" href="../../../assets/css/framework.css">
        <link rel="stylesheet" href="../../../assets/css/global.css">
        <link rel="stylesheet" href="../../../assets/css/edit_profile.css">
        <link rel="stylesheet" href="../../../assets/css/user_titles.css">
        <link rel="stylesheet" href="../../../assets/css/post_box.css">
        <title>Edit profile</title>
    </head>
    <body>








    <header class="page-header">
        <div class="container">
            <a href="../profile.php" class="go-back"><i class="fas fa-arrow-left"></i></a>
            <div class="logo">
                <a href="#">Edit Profile</a>
            </div>
            <nav>
                <div id="menu-btn" class="icon">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>








    <section class="profile-box">
        <div class="container">
            <form action="#" autocomplete="off" id="form">
                <h1>Edit your account informations</h1>
                <div class="error"></div>
                <div class="box">
                    <input type="text" name="new_name" id="new_name" placeholder="What is your name?">
                    <i class="fas fa-user"></i>
                </div>
                <div class="box">
                    <textarea name="new_bio" id="new_bio" cols="30" placeholder="Tell us about yourself..."></textarea>
                    <i class="fas fa-newspaper"></i>
                </div>
                <div class="box">
                    <input type="text" name="new_country" id="new_country" placeholder="Where are you from?">
                    <i class="fas fa-earth"></i>
                </div>
                <div class="box">
                    <input type="number" name="new_age" id="new_age" placeholder="How old are you?">
                    <i class="fas fa-cake-candles"></i>
                </div>
                <div class="box">
                    <input type="text" name="new_gender" id="new_gender" placeholder="Male or Feamle">
                    <i class="fas fa-male"></i>
                </div>
                <div class="box">
                    <a href="profile/profile_pic.php" class="profile">profile picture</a>
                    <i class="fas fa-image"></i>
                </div>
                <div class="box">
                    <a href="cover/cover_pic.php" class="cover">Cover picture</a>
                    <i class="fas fa-image"></i>
                </div>
                
                <div class="box update">
                    <input type="submit" name="update" id="update" class="update" value="Update">
                    <i class="fas fa-save"></i>
                </div>
            </form>
        </div>
    </section>

    <script src="../../../scripts/js/edit_profile.js"></script>
    </body>
</html>