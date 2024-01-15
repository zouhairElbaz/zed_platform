<?php
    session_start();
    include_once "../../scripts/php/config.php";
    if(!isset($_SESSION['user_unique_id'])){
        header("location: ../login/login.php");
    }else{
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
            $status = "offline";
            $sql = mysqli_query($conn, "UPDATE users SET user_status = '{$status}' WHERE user_unique_id = {$logout_id}");
            if($sql){
                session_unset();
                session_destroy();
                header("Location: ../login/login.php");
            }else{
                header("Location: ../login/login.php");
            }
        }
        echo "Your logout ID is: " . $logout_id;
    }
?>