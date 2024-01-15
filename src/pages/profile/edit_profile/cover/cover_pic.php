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
        <link rel="stylesheet" href="../../../../assets/css/normalize.css">
        <link rel="stylesheet" href="../../../../assets/css/all.min.css">
        <link rel="stylesheet" href="../../../../assets/css/animations.css">
        <link rel="stylesheet" href="../../../../assets/css/framework.css">
        <link rel="stylesheet" href="../../../../assets/css/global.css">
        <link rel="stylesheet" href="../../../../assets/css/edit_profile.css">
        <link rel="stylesheet" href="../../../../assets/css/user_titles.css">
        <link rel="stylesheet" href="../../../../assets/css/post_box.css">
        <title>Edit cover pic</title>
    </head>
    <body>








    <header class="page-header">
        <div class="container">
            <a href="../edit_profile.php" class="go-back"><i class="fas fa-arrow-left"></i></a>
            <div class="logo">
                <a href="#">Edit Cover Pic</a>
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
                <h1>Edit your Cover Picture</h1>
                <div class="error"></div>
                <div class="box">
                    <input type="file" name="cover_image" id="cover_image">
                    <i class="fas fa-image"></i>
                </div>
                
                <div class="box update">
                    <input type="submit" name="update" id="update" class="update" value="Update">
                    <i class="fas fa-save"></i>
                </div>
            </form>
        </div>
    </section>

    <script src="new_cover_pic.js"></script>
    </body>
</html>