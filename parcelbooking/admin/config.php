<?php
session_start();


if(!isset($_SESSION['user_details']) ){
    header("location:login.php");
}else{
    $user_details = $_SESSION["user_details"];
  
}
 $user_id =  $user_details ['user_id'];
 $username = $user_details ['username'];