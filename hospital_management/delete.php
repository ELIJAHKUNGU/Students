<?php

if (isset($_GET['id'])){

    $id = $_GET['id'];
    
    require 'db.php';
    $sql="DELETE FROM `patients`  WHERE  patient_id= $id";
    mysqli_query($conn,$sql);
    header("location:patients.php");
}










?>