<?php
session_start();

if( !isset($_SESSION['user_details']) ){
    header("location:login.php");
}else{
    $user_details = $_SESSION["user_details"];
  
}
  $user_id =  $user_details ['user_id'];
$user_name = $user_details['username'];
$company_name = $user_details['company_name'];