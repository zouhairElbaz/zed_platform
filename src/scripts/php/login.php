<?php
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE user_email = '{$email}' AND user_password = '{$password}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $status = "active";
            $sql2 = mysqli_query($conn, "UPDATE users SET user_status = '{$status}' WHERE user_unique_id = {$row['user_unique_id']}");
            $_SESSION['user_unique_id'] = $row['user_unique_id'];
            if($sql2){
                echo "done";
            }
        }else {
            echo "Email or password are incorrect!";
        }
    }else {
        echo "Please enter your email and password!";
    }
?>