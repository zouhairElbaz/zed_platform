<?php

    session_start();
    include_once "config.php";
    $user_info = "";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE user_unique_id = {$_SESSION['user_unique_id']}");
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
        $user_info .= '
        <section class="cover">
        <img src="../../assets/users_images/' . $row['user_cover'] . '" alt="user cover pic">
    </section>
    <section class="profile-pic">
        <img src="../../assets/users_images/' . $row['user_image'] . '" alt="user profile pic">
    </section>
    <section class="user-info">
        <span class="user-name">'.  $row['user_name'] .'</span>
        <p class="user-bio">'. $row['user_bio'] .'</p>
    </section>
    <section class="actions">
        <a href="edit_profile/edit_profile.php" class="action-link">Edit Profile <i class="fas fa-pen"></i></a>
        <a href="#" class="action-link">Friends List <i class="fas fa-users"></i></a>
    </section>
    <section class="more-info">
        <ul>
            <li class="title">
                <i class="fas fa-ranking-star"></i> Title: 
                <span id="title" class="'. $row['user_title'] .'">'. $row['user_title'] .'
                </span>
            </li>
            <li class="country"><i class="fas fa-house"></i> Frome: <span id="country">'. $row['user_country'] .'</span></li>
            <li class="age"><i class="fas fa-cake-candles"></i> Age: <span id="age">'. $row['user_age'] .'</span></li>
            <li class="gender"><i class="fas fa-male"></i> Gneder: <span id="gender">'. $row['user_gender'] .'</span></li>
            <li class="account-age"><i class="fas fa-clock"></i> Join Date: <span id="join-date">'. $row['join_date'] .'</span></li>
        </ul>
    </section>
    <section class="account-info">
        <a href="#" class="action-link">0 Followers</a>
        <a href="#" class="action-link">0 Following</a>
    </section>
        ';
    }
    echo $user_info;
?>