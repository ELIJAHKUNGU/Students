<?php

if (isset($_POST["password"])) {
    require "DB.php";
    extract($_POST);
    $sql = "select * from `users` where email='$email' and password='$password' LIMIT 1";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if (mysqli_num_rows($result) ==1){
        //success
        $user_details = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["user_details"] = $user_details;
        header("location:index.php?success=You are  succesfully logged in");
    }else{
        header("location:login.php?error= Wrong Email Address or Password");


    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<style>
    body{
        background-image: url(./assets/bg06.png);
    }
</style>
<body>
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-sm-6 mt-5 pt-5">
            <div class="shadow p-3 mt-5 pt-5">
                <div class="card-header ">Sign In</div>
                <div class="">
                    <form action="login.php" method="post">
                    <?php

                            if (isset($_GET['error'])) { ?>
                            <p class="text-danger"><?php echo $_GET['error']; ?></p>
                            <?php } ?>

                            <?php if (isset($_GET['success'])) { ?>
                            <p class="text-success"><?php echo $_GET['success']; ?></p>
                            <?php } ?>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                       <div class="d-flex justify-content-center ">
                       <button class="btn btn-info pl-5 pr-5 ">Sign In</button>
                      
                    </form>
                    <a href="register.php"> <span class="btn ml-4 btn-info pl-5 pr-5 btn-block">Register</span></a>
                       </div>

                </div>
                
            </div>

        </div>
    </div>
</div>
</body>
</html>
<script src="./js/bootstrap.bundle.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/popper.min.js"></script>
