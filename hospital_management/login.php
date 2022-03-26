<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);



if (isset($_POST["password"])) {
    $conn = mysqli_connect("localhost", "root", "" , "hosi");
    extract($_POST);
    $password = $_POST['password'];
    $sql = "select * from users where email='$email' and password='$password' LIMIT 1";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if (mysqli_num_rows($result) == 1){
        //success
        $info = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["info"] = $info;
        header("location:index.php?success= You have successfully logged in  ");
    }else{
        header("location:login.php?error= Patients profile have been   updated successfully ");
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/all.min.css" />
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/bootstrap.css" />
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/style.css" />
    <title>Hospital System Dashboard</title>
</head>


<style>
    body {
        background-image: url(./assets/bg1.jpg);
        background-size: cover;
        background-position: center;
    }
    
    .card {
        border-radius: 10px;
    }
</style>

<body>
    <div class="d-flex justify-content-between text-white p-3">
        <img src="./assets/logo.png" alt="" srcset="">
        <p><i class="fa fa-user"></i> SIGH IN</p>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-sm-4 card">
                <div class="">
                    <div class=" ">
                        <h2 class=" text-center pt-5 font-weight-bold" style="font-size: 25px">
                            Sign in
                        </h2>
                    </div>
                    <div class="">
                    <form action="" method="post">
                            <?php

                            if (isset($_GET['error'])) { ?>
                            <p class="text-danger"><?php echo $_GET['error']; ?></p>
                            <?php } ?>

                            <?php if (isset($_GET['success'])) { ?>
                            <p class="text-success"><?php echo $_GET['success']; ?></p>
                            <?php } ?>

                            
                            <label for="">Enter Your Email Address Here...</label>
                            <input type="email" name="email" class="form-control" id="">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" id="">
                            <button type="submit" name="save" class="btn pl-2 pr-2 btn-success mt-2">login</button>
                        </form>

                        </form>



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