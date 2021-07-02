<?php
if (isset($_POST["save"])) {
    require "DB.php";
    extract($_POST);
    $sql = "INSERT INTO `users`(`user_id`, `username`, `email`, `password`)
     VALUES ('null','$username','$email','$password')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    header('location:index.php');
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
    <form action="Register.php" method="POST">
        <button class="btn btn-ghost">
            <img src="images/google.svg" alt="">
            Create Account In with Google
        </button>
        <small>or</small>
        <div class="form-control">
            <label for="email">Username</label>
            <input type="text" name="username" id="email" required placeholder="Enter your Username">
        </div>
        <div class="form-control">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required placeholder="Enter your email">
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
        <button class="btn" name="save">Create Account</button>
        <small>Already have an account ? <a href="./login.php">Login</a></small>
    </form>
    <div class="features">
        <img src="images/lap.svg" alt="">
    </div>
</div>
</body>
</html>
