<?php
session_start();

if( !isset($_SESSION['session_details']) ){
    header("location:login.php");
}else{
    $session_details = $_SESSION["session_details"];
  
}
$user_id =  $session_details ['user_id'];
$user_name = $session_details['username'];
