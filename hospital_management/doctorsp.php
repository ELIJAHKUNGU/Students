
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_POST["save"])){
    //save to db
    require 'db.php';
    
    extract($_POST);
    $sql = "INSERT INTO `doctors`( `doctor_username`, `doctor_phNo`, `doctor_title`, `salary`, `doctor_image`,  `doctor_name`, `specialist`, `status`, `address`, `Telephone`, `doctor_notes`)
     VALUES ('$username','$doctor_phNo','$title','$salary','$specialist','$fullname','$status','$address','$telephone','$notes')";
   if ($result){
    header("location:doctorprofile.php?success=Your account has been  successfully created login");
    exit();
    }else{
        header("location:index.php?error=Yerroe");
    }

   

}

?>