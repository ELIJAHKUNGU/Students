<?php
    require_once 'config.php';
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    if (isset($_POST["save"])) {
        $conn = mysqli_connect("localhost","root","","autoride");
        extract($_POST);
        $sql = "INSERT INTO `people_requests`(`request_id`, `user_id`, `username`, `parcel_idno`, `pickup_location`, `date_m`, `time_t`, `model`, `weight`) 
        VALUES (null,'$user_id','$username','$parcel_idno','$pickup_location','$date_m','$time_t','$model','$weight')";
        $result2 =  mysqli_query($conn, $sql);
        if ($result2){
            header("location:parcel.php?success=Your account has been  successfully created login");
            exit();
        }else{
            header("location:dashboard.php?error=unknown error occurred&");
            }
    }



?>