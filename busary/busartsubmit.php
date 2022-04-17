<?php

session_start();

include 'config.php';

$user_id =  $user_details ['user_id'];



error_reporting(E_ALL);
ini_set('display_errors', 1);
    if (isset($_POST["save"])) {
        $conn = mysqli_connect("localhost","root","","bursary");
        extract($_POST);
        include 'config.php';

        echo  $user_id =  $user_details ['user_id'];
        $sql = "INSERT INTO `bursaries`( `b_type`, `user_id`)
            VALUES ('$b_type','$user_id')";
        if ($conn->query($sql) == TRUE) {
            echo ' <script>window.location.replace("myapplications.php");</script>';

    
            // header("location:myapplications.php?success=Your application have been successfully processed ");
    
        } else {
            header("location:busarytype.php?error=Your application wasn't processed ");
        }
    
        $conn->close();
    }
?>