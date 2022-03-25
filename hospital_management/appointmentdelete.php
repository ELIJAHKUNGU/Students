<?php



if (isset($_GET['id'])){

    $id = $_GET['id'];
    
    require 'db.php';
    $sql="DELETE FROM `appointments`  WHERE  appointment_id= $id";
    mysqli_query($conn,$sql);
    header("location:appointments.php");
}
?>