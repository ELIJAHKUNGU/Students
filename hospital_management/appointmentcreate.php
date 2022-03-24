<?php
if (isset($_POST["save"])) {
    require 'db.php';
    extract($_POST);
    
        $sql = "INSERT INTO `appointments`(`patient_id`, `pateint_name`, `appointment_activity`,`doctor_id`, `scheduled_month`, `scheduled_time`) 
        VALUES ('$patient_id','$pateint_name','$appointment_activity','$doctor_id','$s_m','$s_time')";
        mysqli_query($conn, $sql);
        header("location:index.php");


}


?>