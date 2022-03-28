<?php
if (isset($_POST["register"])) {
    
    require 'db.php';
    extract($_POST);
    $email = $_POST['email'];
    $sql2 = "SELECT * FROM users where email = '$email'";
    $result = mysqli_query($conn,$sql2);

    if (mysqli_num_rows($result) > 0){
        header("Location:register.php?error=The Email Address exist login");
       
    }else{
        $sql = "INSERT INTO `users`(`username`,`company_name`, `email`, `phoneNumber`, `address`, `password`) 
        VALUES ('$name','$company_name','$email','$phoneNumber','$address','$password')";
        $result2 =  mysqli_query($conn, $sql);
        if ($result2){
            // $info = mysqli_fetch_assoc($result2);

            // session_start();
            // $_SESSION["info"] = $info;
            // header("location:login.php?success=Your account has been  successfully created login  ");
            header("location:login.php?success=Your account has been  successfully created login");
            exit();

        }else{
            header("location:register.php?error=unknown error occurred&$email");
        }

    }


}

?>