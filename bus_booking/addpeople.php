<?php

require_once 'config.php';
if (isset($_POST["book_seats"])) {
    $conn = mysqli_connect("localhost","root","","autoride");
    extract($_POST);
    $sql = "INSERT INTO `people_people`(`request_id`, `user_id`,`idNo`,  `username`, `pickup_location`, `date_m`, `time_t`, `model`, `no_seats`) 
    VALUES (null,'$user_id', '$idNo','$username','$pickup_location','$date_m','$time_t','$model','$no_seats')";
     $result2 =  mysqli_query($conn, $sql);
     if ($result2){
         header("location:people.php?success=Your order has been processed successfully ");
         exit();
   }else{
     header("location:dashboard.php?error=Your order wasn't  processed Kindly consult +2547 454 454 454");
      }
}
?>