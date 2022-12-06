<?php
    require_once 'config.php';
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    if (isset($_POST["save"])) {
        $conn = mysqli_connect("localhost","root","","autoride");
        extract($_POST);
        //SELECT `request_id`, `username`, `parcel_idno`, `phone`, `email`, `pickup_location`, `date_m`, `time_t`, `model`, `weight`,
        // `status` FROM `people_requests` WHERE 1
        $sql = "INSERT INTO `people_requests`( `username`, `parcel_idno`,`phone`, `email` ,`pickup_location`, `date_m`, `time_t`, `model`, `weight`) 
        VALUES ('$username','$parcel_idno','$phone','$email', '$pickup_location','$date_m','$time_t','$model','$weight')";
        $result2 =  mysqli_query($conn, $sql);
        if ($result2){
            header("location:parcel.php?success=Your details parcel have been successfully added ");
            exit();
        }else{
            header("location:dashboard.php?error=unknown error occurred&");
            }
    }



?>