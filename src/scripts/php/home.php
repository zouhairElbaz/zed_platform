<?php
    session_start();
    include_once "config.php";
    $current_user_img = "";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE user_unique_id = {$_SESSION['user_unique_id']}");
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
        $current_user_img .= '<img src="../../assets/users_images/' . $row['user_image'] . '" alt="user image">
        <span class="status '. $row['user_status'] .'"></span>';
    }
    echo $current_user_img;
?>