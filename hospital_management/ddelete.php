<?php



if (isset($_GET['id'])){

    $id = $_GET['id'];
    
    require 'db.php';
    $sql="DELETE FROM `doctors`  WHERE  doctor_id= $id";
    
    if ($conn->query($sql) === TRUE) {

        header("location:doctors.php?success=Doctor profile have been deleted successfully ");
    
    } else {
        header("location:doctors.php?error=Your ADoctor profile was not deleted  +2547  220 000");
    
    
    }
    
    $conn->close();
}
?>