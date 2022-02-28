<?php
if (isset($_POST["password"])) {
    require "DB.php";
    extract($_POST);
    $sql = "INSERT INTO users(`user_id`, `names`, `email`, `password`) 
                      VALUES (null,'$username','$email','$password')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    header('location:show.php');
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register user</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-6 pt-5 mt-5">
                <div class="shadow">
                    <div class=" ">
                        <h2 class=" text-center pt-5 font-weight-bold" style="font-size: 25px">
                            Register user
                        </h2>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="title">Full Name</label>
                                <input type="text" placeholder="JOHN DOE" class="form-control pt-4 pb-4" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Email</label>
                                <input type="email" placeholder="johndoe@gmail.com" class="form-control pt-4 pb-4" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Primary Phone Number</label>
                                <input type="number" class="form-control pt-4 pb-4" name="phoneNumber" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Work PhoneNumber</label>
                                <input type="email" class="form-control pt-4 pb-4" name="wphoneNumber" required>
                            </div>

                            <div class="form-group">
                                <label for="title">Address</label>
                                <input type="email" class="form-control pt-4 pb-4" name="address" required>
                            </div>


                            <div class="form-group">
                                <label for="title">Password</label>
                                <input type="password" class="form-control pt-4 pb-4" name="password" required>
                            </div>

                            <div class="d-flex">
                                <button style="text-transform: uppercase;" class="btn btn-success  mr-3 ">Register</button>


                        </form>
                        <a href="./login.php" style="text-transform: uppercase;" class="nav-link">Sign in</a>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel-side-img">
                    <div style="margin-top: 10rem; margin-top: 10rem; padding-top: 5rem; background-size: cover;" class="pt-5 mt-5">
                        <img src="./assets/Mobile login-amico.svg" class="img-fluid " alt="" srcset="">
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