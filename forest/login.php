<?php

if (isset($_POST["save"])) {
    require "db.php";
    extract($_POST);
    $sql = "select * from users where email='$email' and password='$password' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) ==TRUE){
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
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forest Management Sign In</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-6 pt-5 mt-5">
                <div class="shadow">
                    <div class=" ">
                        <h2 class=" text-center pt-5 font-weight-bold" style="font-size: 25px">
                            Sign in
                        </h2>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                            <?php

                            if (isset($_GET['error'])) { ?>
                            <p class="text-danger"><?php echo $_GET['error']; ?></p>
                            <?php } ?>

                            <?php if (isset($_GET['success'])) { ?>
                            <p class="text-success"><?php echo $_GET['success']; ?></p>
                            <?php } ?>

                            <div class="form-group">
                                <label for="title">Email</label>
                                <input type="email" class="form-control pt-4 pb-4" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="title">Password</label>
                                <input type="password" class="form-control pt-4 pb-4" name="password" required>
                            </div>

                            <div class="d-flex">
                                <button style="text-transform: uppercase;" name="save" class="btn btn-success mr-3 ">Sign in</button>


                        </form>
                        <a style="text-transform: uppercase;" href="./register.php">Register</a>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel-side-img ">
                    <div class="">
                        <img src="./assets/Mobile login-rafiki.svg" class="img-fluid " alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>

</html>