<?php
    session_start();
    // if(isset($_SESSION['user_unique_id'])){
    //     header("Location: ../home/home.php");
    // }
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
        <link rel="stylesheet" href="../../assets/css/login.css">
        <title>Login</title>
    </head>
    <body>
        <header class="page-header">
            <div class="container">
                <div class="logo">
                    <a href="#">ZED</a>
                </div>
            <nav>
                <ul></ul>
                <div id="menu-btn" class="icon">
                    <i class="fas fa-home"></i>
                </div>
            </nav>
        </div>
    </header>
    <section class="landing login">
        <div class="container">
            <form action="#" autocomplete="off">
                <h1>Login</h1>
                <div class="error">
                </div>
                <div class="box normal">
                    <input type="email" name="email" id="email" placeholder="Enter Your email">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="box normal">
                    <input type="password" name="password" id="password"placeholder="Enter your password">
                    <i class="fas fa-lock" id="pass-icon"></i>
                </div>
                <div class="box normal">
                    <input type="submit" name="submit" id="submit" class="submit">
                </div>
                <p>New here? <a href="../signup/signup.php">Create account</a></p>
            </form>
        </div>
    </section>
    <script src="../../scripts/js/show_pass.js"></script>
    <script src="../../scripts/js/login.js"></script>
    </body>
</html>