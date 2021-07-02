<?php
require 'security.php';
if (isset($_GET['id'])){

    $id = $_GET['id'];
    //extract($_GET);
    require 'DB.php';
    $sql ="DELETE FROM `stocks` WHERE  stock_id = $id";
    mysqli_query($conn,$sql);
}

header("location:show.php"); //redirect to show.php








?>