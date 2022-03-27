


<?php

require 'config.php';
$user_id = $user_id;


require 'db.php';
extract($_POST);
$sql="INSERT INTO `hello`(`id`,`user_id`, `fname`, `lname`, `email`, `phone`, `dd`, `nn`, `yyyy`, `uname`, `pword`) VALUES 
(null,'$user_id','$fname','$lname','$email','$phone','$dd','$nn','$yyyy','$uname','$pword')";
$result =  mysqli_query($conn, $sql);
if ($result){
    header("location:orders.php?success=Your account has been  successfully created login");
    exit();

}else{
    header("location:placeorder.php?error=Yerroe");
}

?>