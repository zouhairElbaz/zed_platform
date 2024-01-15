<?php
    session_start();
    include_once "config.php";
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($name) && !empty($email) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            // check if the user already exist
            $sql = mysqli_query($conn, "SELECT user_email FROM users WHERE user_email = '$email'");
            if(!mysqli_num_rows($sql) > 0){
                if(strlen($name) > 2 && strlen($name) <= 20){
                    // check the length of the password
                    if(strlen($password) >= 6){
                        // Get new user unique id and make the query to insert the user data
                        $status = "active";
                        $join_date = date("Y-m-d");
                        $unique_id = rand(time(), 1000000000); // creating random and unique id for each user
                        $sql2 = mysqli_query($conn, "INSERT INTO users (user_unique_id, user_name, user_email, user_password, user_image, user_cover, user_bio, user_age, user_gender, user_country, user_title, user_status, join_date) VALUES ('{$unique_id}', '{$name}', '{$email}', '{$password}','default_profile.jpg', 'desfault_cover.jpg', '...', 'unknown', 'unknown', 'unknown', 'User', '{$status}', '{$join_date}')");
                        if($sql2){
                            $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE user_email = '{$email}'");
                            if(mysqli_num_rows($sql3) > 0){
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['user_unique_id'] = $row['user_unique_id'];
                                echo "done";
                            }
                        }else {
                            echo "Something went wrong! try again leter";
                        }
                    }else {
                        echo "Your password is too weak";
                    }
                }else {
                    echo "Choose name between 3 ro 20 characters";
                }
            }else {
                echo "This email already is exist!";
            }
        }else {
            echo "$email - this email is nott valid!";
        }
    }else {
        echo "All fields are requiered!";
    }
?>