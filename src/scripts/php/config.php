<?php
    $db_host = "localhost";
    $db_user = "xmsfgp";
    $db_pass = "eeSb4vcmn@gp4W/u";
    $db_name = "zed_app";
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if(!$conn){
        echo "There is an error with the Database" . mysqli_connect_error();
    }
?>