<?php
    session_start();
    include_once "config.php";
    $all_users = "";


    $sql2 = mysqli_query($conn, "SELECT * FROM users WHERE user_unique_id != {$_SESSION['user_unique_id']}");
    if(mysqli_num_rows($sql2) <= 0){
        $all_users .= "<p class='no-users-at-all'> There is no users at all. </p>";
    }else if(mysqli_num_rows($sql2) > 0){
        while($row = mysqli_fetch_assoc($sql2)){
            $all_users .= '<a href="message_page/message_page.php?user_id='. $row['user_unique_id'] .'" class="user">
            <div class="user-info">
                <div class="user-pic">
                    <img src="../../assets/users_images/' . $row['user_image'] . '" alt="user image">
                    <span class="status '. $row['user_status'] .'"></span>
                </div>
                <div class="user-data">
                    <span class="user-name">'. $row['user_name'] .'</span>
                    <p class="last-msg">Click to chat...</p>
                </div>
            </div>
            <div class="date">
                <span class="last-msg-date"></span>
            </div>
        </a>';
        }
    }
    echo $all_users;
?>