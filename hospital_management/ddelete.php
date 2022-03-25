<?php



if (isset($_GET['id'])){

    $id = $_GET['id'];
    
    require 'db.php';
    $sql="DELETE FROM `doctors`  WHERE  doctor_id= $id";
    mysqli_query($conn,$sql);
    header("location:doctors.php");
}
?>