<?php
    session_start();
    if(!isset($_SESSION['user_unique_id'])){
        header("Location: ../../login/login.php");
    }
    include_once "../../../scripts/php/config.php";
    $friend_id = mysqli_real_escape_string($conn, $_GET['user_id']);
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
        <link rel="stylesheet" href="../../../assets/css/message_page.css">
        <title>Message page</title>
    </head>
    <body>
    <!-- <header class="page-header">
      <div class="container">
        <div class="logo">
          <a href="#">ZED</a>
        </div>
        <nav>
          <div id="menu-btn" class="icon">
            <i class="fas fa-bars"></i>
          </div>
        </nav>
      </div>
    </header> -->



        <!-- Start message page  -->
        <?php
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE user_unique_id = {$friend_id}");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
            }
        ?>
        <section class="message-page">
            <div class="container">
                <header class="header">
                    <div class="out">
                        <a href="../messages.php"><i class="fas fa-arrow-left"></i></a>
                    </div>
                    <div class="sender-info">
                        <div class="sender-pic">
                            <img src="../../../assets/users_images/<?php echo $row['user_image'] ?>" alt="sender -pic">
                            <span class="status <?php echo $row['user_status'] ?>"></span>
                        </div>
                        <div class="sender-data">
                            <span class="sender-name"><?php echo $row['user_name'] ?></span>
                            <span class="title"><?php echo $row['user_title'] ?></span>
                        </div>
                    </div>
                    <div class="more">
                        <i class="fas fa-refresh" id="reload-btn"></i>
                        <i class="fas fa-user"></i>
                        <i class="fas fa-ellipsis"></i>
                    </div>
                </header>


                
                <!-- start msgs box  -->
                <section class="messages-box" id="messages-box">
                </section>
                <!-- end msgs box  -->



                <div class="form-area">
                    <form action="#" id="msg-send-form" autocomplete="off">
                        <input type="text" name="user_id" id="user_id" value="<?php echo $_SESSION['user_unique_id']; ?>" hidden>
                        <input type="text" name="friend_id" id="friend_id" value="<?php echo $friend_id; ?>" hidden>
                        <input type="text" name="message" id="message" placeholder="Write your message here...">
                        <button><i class="far fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </section>
        <!-- End message page  -->
        <script src="../../../scripts/js/message_page.js"></script>
        <script src="../../../scripts/js/get_chat.js"></script>
    </body>
</html>