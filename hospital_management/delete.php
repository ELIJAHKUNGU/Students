<?php

if (isset($_GET['id'])){

    $id = $_GET['id'];
    
    require 'db.php';
    $sql="DELETE FROM `patients`  WHERE  patient_id= $id";
    mysqli_query($conn,$sql);
    header("location:patients.php");
    if ($conn->query($sql) === TRUE) {

        header("location:patients.php?success= Patient profile have been deleted successfully ");
    
    } else {
        header("location:patients.php?error=Your Patient profile was not deleted  +2547  220 000");
    
    
    }
    
    $conn->close();
}










?>