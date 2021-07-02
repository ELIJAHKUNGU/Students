<?php
require 'security.php';
if (isset($_GET['id'])){

    $id = $_GET['id'];
    //extract($_GET);
    require 'DB.php';
    $sql ="DELETE FROM `employees` WHERE  e_id = $id";
    mysqli_query($conn,$sql);
}

header("location:employees.php"); //redirect to show.php








?>