<?php
session_start();

if( !isset($_SESSION['info']) ){
    header("location:login.php");
}else{
    $info = $_SESSION["info"];
  
}
$user_id =  $info ['user_id'];
$user_name = $info['username'];
