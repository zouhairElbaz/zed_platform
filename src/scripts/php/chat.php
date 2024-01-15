<?php
    session_start();
    include_once "./config.php";
    if(!isset($_SESSION['user_unique_id'])){
        header("../../pages/login/login.php");
    }else{
        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $friend_id = mysqli_real_escape_string($conn, $_POST['friend_id']);
        $msg = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($msg)){
            $sql = mysqli_query($conn, "INSERT INTO messages (user_msg_id, friend_msg_id, msg) VALUES ({$user_id}, {$friend_id}, '{$msg}')") or die();
        }
    }
?>