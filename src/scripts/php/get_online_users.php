<?php
    session_start();
    include_once "config.php";
    $online_users = "";

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE user_unique_id != {$_SESSION['user_unique_id']} AND user_status = 'active'");
    if(mysqli_num_rows($sql) <= 0){
        $online_users .= '<p class="no-online-users" style="width: 100%"> There is no users online</p>';
    }else if(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $online_users .= '<a href="message_page/message_page.php?user_id='. $row['user_unique_id'] .'" class="user">
                            <img src="../../assets/users_images/' . $row['user_image'] . '" alt="user image">
                            <span class="status '. $row['user_status'] .'"></span>
                        </a>';
        }
    }
    echo $online_users;
?>