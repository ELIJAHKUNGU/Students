<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_POST["register"])) {
    $conn=mysqli_connect("localhost","root","","autoride");
    extract($_POST);
    $email = $_POST['email'];
    $sql2 = "SELECT * FROM users where email = '$email'";
    $result = mysqli_query($conn,$sql2);

    if (mysqli_num_rows($result) > 0){
        header("Location:register.php?error=The Email Address exist login");
       
    }else{
       
             $sql = "INSERT INTO `users`(`username`, `email`, `phoneNumber`,  `password`) 
            VALUES ('$name','$email','$phoneNumber','$password')";
            $result2 =  mysqli_query($conn, $sql);
            if ($result2){
                
                header("location:login.php?success=Your account has been  successfully created login");
                exit();

          }else{
            header("location:login.php?error=unknown error occurred&$email");
             }

    }


}


// if (isset($_POST["save"])) {
//     require "db.php";
//     extract($_POST);
//     $sql = "select * from users where email='$email' and password='$password' LIMIT 1";
//     $result = mysqli_query($conn, $sql);

//     if (mysqli_num_rows($result) ==TRUE){
//         //success

//         $info = mysqli_fetch_assoc($result);
//         session_start();
//         $_SESSION["info"] = $info;
//         header("location:index.php?success=You are  succesfully logged");
//     }else{
//         header("location:login.php?error= Wrong Email Address or Password");


//     }
// }
?>

