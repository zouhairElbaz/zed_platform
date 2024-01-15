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
        <title>Signup</title>
    </head>
    <body>
        <header class="page-header">
            <div class="container">
                <div class="logo">
                    <a href="#">ZED</a>
                </div>
                <nav>
                    <ul id="links">
                    </ul>
                <div id="menu-btn" class="icon">
                    <i class="fas fa-home"></i>
                </div>
                </nav>
            </div>
        </header>
    <section class="landing signup">
        <div class="container">
            <form action="#" autocomplete="off">
                <h1>Signup</h1>
                <div class="error">
                </div>
                <div class="box normal">
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                    <i class="fas fa-user"></i>
                </div>
                <div class="box normal">
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="box normal">
                    <input type="password" name="password" id="password" placeholder="Enter your password">
                    <span class="prog">
                        <span class="val"></span>
                    </span>
                    <i class="fas fa-lock" id="pass-icon"></i>
                </div>
                <!-- <div class="box normal">
                    <input type="file" name="image" id="image">
                </div> -->
                <div class="box">
                    <input type="submit" name="submit" id="submit" class="submit">
                </div>
                <p>Already have an account? <a href="../login/login.php">Login</a></p>
            </form>
        </div>
    </section>
    <script src="../../scripts/js/show_pass.js"></script>
    <script src="../../scripts/js/pass_lvl.js"></script>
    <script src="../../scripts/js/signup.js"></script>
    </body>
</html>