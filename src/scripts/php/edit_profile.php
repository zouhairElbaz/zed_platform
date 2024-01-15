<?php
    session_start();
    if(!isset($_SESSION['user_unique_id'])){
        header("Location: ../../../login/login.php");
    }else{
        include_once "config.php";
        $name = mysqli_real_escape_string($conn, $_POST['new_name']);
        $bio = mysqli_real_escape_string($conn, $_POST['new_bio']);
        $country = mysqli_real_escape_string($conn, $_POST['new_country']);
        $age = mysqli_real_escape_string($conn, $_POST['new_age']);
        $gender = mysqli_real_escape_string($conn, $_POST['new_gender']);
        
        

        $user = mysqli_query($conn, "SELECT * FROM users WHERE user_unique_id = {$_SESSION['user_unique_id']}");
        if(mysqli_num_rows($user) > 0){
            $row = mysqli_fetch_assoc($user);
        }

        // if(isset($_POST['update'])){
            if(!empty($name) &&!empty($bio) && !empty($country) && !empty($age) && !empty($gender)){
                if(strlen($name) >= 3 && strlen($name) <= 20){
                    $name = $name;
                    if(strlen($bio) >= 3 && strlen($bio) <= 200){
                        if(preg_match('/^[a-zA-Z]+$/', $country)){
                            if($age >= 13){
                                if($age >= 13 && $age <= 100){
                                    if($gender == "unknown" || $gender == "Unknown" || $gender == "Male" || $gender == "Female" || $gender == "male" || $gender == "female" || $gender == "m" || $gender == "f" || $gender == "M" || $gender == "F"){
                                        $sql = mysqli_query($conn, "UPDATE users SET user_name = '{$name}', user_bio = '{$bio}', user_country = '{$country}', user_age = '{$age}', user_gender = '{$gender}' WHERE user_unique_id = {$_SESSION['user_unique_id']}");
                                        if($sql){
                                            echo "done";
                                        }else{
                                            echo "Somthing went wrong!";
                                        }
                                    }else{
                                        echo "Please write a correct value (Unknow - Male - Female - M - F)";
                                    }
                                }else{
                                    echo $age ." years!! Bro are u still alive? enter correct age!";
                                }
                            }else{
                                echo "Your are a child please fuck off";
                            }
                        }else{
                            echo "Please write correct country name, or just write 'unknown' if you don't want to write it";
                        }
                    }else{
                        echo "Your bio should be between 3 and 200 character";
                    }
                }else{
                    echo "Choose a name between 3 and 20 character";
                }
            }else{
                echo "All fields are requiered!";
            }
        }
    // }
?>