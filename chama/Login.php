<?php

if (isset($_POST["save"])) {
    require "DB.php";
    extract($_POST);
    $sql = "select * from users where email='$email' and password='$password' LIMIT 1";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if (mysqli_num_rows($result) == 1){
        //success
        $info = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["info"] = $info;
        header("location:index.php");
    }else{
        $message = "Wrong username or password";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/register.css">
		<link
			rel="stylesheet"
			href="./fontawesome-free-5.0.1/css/fontawesome-all.css"
		/>
</head>
<body>
	<div class="container">
    <form action="Login.php" method="POST">
        <button class="btn btn-ghost">
            <img src="images/google.svg" alt="">
            Log In with Google
        </button>
        <small>or</small>
        <div class="form-control">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter your email">
        </div>
        <div class="form-control">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" placeholder="Enter your password">
        </div>
        <div class="checkbox-container">
            <input type="checkbox" id="remember">
            <label for="remember">Remember me</label>
            <a href="">Forgot password</a>
        </div>
        <button class="btn" name="save">Log In</button>
        <small>Don't have an account ? <a href="">Sign up</a></small>
    </form>
    <div class="features">
        <img src="images/lap.svg" alt="">
    </div>
</div>
	</body>
</html>
