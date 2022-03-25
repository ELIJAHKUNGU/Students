
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_POST["save"])){
    //save to db
    require 'db.php';
    
    extract($_POST);
    $sql = "INSERT INTO `doctors`( `doctor_username`, `doctor_phNo`, `doctor_title`, `salary`, `doctor_image`,  `doctor_name`, `specialist`, `status`, `address`, `Telephone`, `doctor_notes`)
     VALUES ('$username','$doctor_phNo','$title','$salary','$specialist','$fullname','$status','$address','$telephone','$notes')";
  
    if ($conn->query($sql) === TRUE) {

        header("location:doctorprofile.php?success= Doctors profile have been created successfully ");
    
    } else {
        header("location:doctorprofile.php?error=Your Doctors profile was not created  +2547  220 000");
    
    
    }
    
    $conn->close();

   

}

?>