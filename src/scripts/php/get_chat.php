<?php
    session_start();
    include_once "./config.php";
    if(!isset($_SESSION['user_unique_id'])){
        header("../../pages/login/login.php");
    }else{
        $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
        $friend_id = mysqli_real_escape_string($conn, $_POST['friend_id']);
        $msg = mysqli_real_escape_string($conn, $_POST['message']);
        $result = "";


        $sql = "SELECT * FROM messages LEFT JOIN users ON users.user_unique_id = messages.user_msg_id WHERE (user_msg_id = {$user_id} AND friend_msg_id = {$friend_id}) OR (user_msg_id = {$friend_id} AND friend_msg_id = {$user_id}) ORDER BY msg_id";
        $allah = mysqli_query($conn, $sql);
        if(mysqli_num_rows($allah) > 0){
            while($row = mysqli_fetch_assoc($allah)){
                if($row['user_msg_id'] === $friend_id){ // if its the incoming message
                    $result .= '<div class="sender msg-box">
                                    <div class="message">
                                        <p class="msg-content">' . $row['msg'] . '</p>
                                    </div>
                                    <div class="info">
                                        <img src="../../../assets/users_images/'. $row['user_image'] .'" alt="">
                                    </div>
                            </div>';
                }else { // if its the outgoing message
                    $result .= '<div class="reciever msg-box">
                                    <div class="message">
                                        <p class="msg-content">' . $row['msg'] . '</p>
                                    </div>
                                </div>';
                }
            }
        }
        echo $result;
    }
?>