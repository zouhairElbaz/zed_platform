<?php
    session_start();
    if(!isset($_SESSION['user_unique_id'])){
        header("Location: ../../../../login/login.php");
    }else{
        include_once "../../../../scripts/php/config.php";
        $user = mysqli_query($conn, "SELECT * FROM users WHERE user_unique_id = {$_SESSION['user_unique_id']}");
        if(mysqli_num_rows($user) > 0){
            $row = mysqli_fetch_assoc($user);
        }


            //checks for the uploaded image
            if(isset($_FILES['profile_image'])){
                $image_name = $_FILES['profile_image']['name'];
                $image_type = $_FILES['profile_image']['type'];
                // $image_size = $_FILES['image']['size'];
                $tmp_name = $_FILES['profile_image']['tmp_name'];

                $image_explode = explode('.', $image_name);
                $image_extention = end($image_explode);
                $extentions = ['png', 'jpeg', 'jpg']; //making this arry of accepted extention then compaee them with the user file extention

                if(in_array($image_extention, $extentions) === true){
                    $time = time();
                    $unique_img_name = $time.$image_name;
                    if(move_uploaded_file($tmp_name, "../../../../assets/users_images/".$unique_img_name)){
                        $sql = mysqli_query($conn, "UPDATE users SET user_image = '{$unique_img_name}' WHERE user_unique_id = {$row['user_unique_id']}");
                        if($sql){
                            echo "done";
                        }else{
                            echo "Something went wrong!";
                        }
                    }
                }else {
                    echo "Please select an image file (png, jpeg, jpg)";
                }
            }else {
                echo "Please select an image!";
            }


    }
?>