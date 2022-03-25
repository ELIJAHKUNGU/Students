<?php



if (isset($_GET['id'])){

    $id = $_GET['id'];
    
    require 'db.php';
    $sql="DELETE FROM `appointments`  WHERE  appointment_id= $id";
    // mysqli_query($conn,$sql);
  
    if ($conn->query($sql) === TRUE) {

        header("location:appointments.php?success=Appointment have deleted successfully ");
    
    } else {
        header("location:appointments.php?error=Your Appointment was not deleted  +2547  220 000");
    
    
    }
    
    $conn->close();
}
?>