<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
if (isset($_POST["register"])) {
    
    require 'db.php';
    // extract($_POST);
    // $email = $_POST['email'];
    // $sql2 = "SELECT * FROM users where email = '$email'";
    // $result = mysqli_query($conn,$sql2);

    // if (mysqli_num_rows($result) > 0){
    //     header("Location:register.php?error=The Email Address exist login");
       
    // }else{
        extract($_POST);
        $sql = "INSERT INTO `quizs`( `skidders`, `tractors`, `tractors_no`, `chain_saw`, `trucks`, `trucks1`, `trucks_no`, `drying_kiln`, `drying_air`, `debarker`, `hand_saw`, `band_saw`, `amount1`) 
        VALUES ('$skidders','$tractors','$tractors_no','$chain_saw','$trucks','$trucks1','$trucks_no','$drying_kiln','$drying_air','$debarker','$hand_saw','$band_saw','$amount1')";
        $result2 =  mysqli_query($conn, $sql);
        if ($result2){
            // $info = mysqli_fetch_assoc($result2);

            // session_start();
            // $_SESSION["info"] = $info;
            // header("location:login.php?success=Your account has been  successfully created login  ");
            header("location:index.php?success=Your account has been  successfully created login");
            exit();

        }else{
            header("location:registers.php?error=unknown error occurre");
        }

    // }


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
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="title">skidders</label>
                                <input type="text" class="form-control pt-4 pb-4" name="skidders" required>
                            </div>
                            <div class="form-group">
                                <label for="title">tractors</label>
                                <input type="text" class="form-control pt-4 pb-4" name="tractors" required>
                            </div>
                            <div class="form-group">
                                <label for="title">tractors_no</label>
                                <input type="text" class="form-control pt-4 pb-4" name="tractors_no" required>
                            </div>
                            <div class="form-group">
                                <label for="title">chain_saw</label>
                                <input type="number" placeholder="+2547 330 000" class="form-control pt-4 pb-4" name="chain_saw" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="title">trucks</label>
                                <input type="text"  class="form-control pt-4 pb-4" name="trucks" required>
                            </div>


                            <div class="form-group">
                                <label for="title">trucks1</label>
                                <input type="text" class="form-control pt-4 pb-4" name="trucks1" required>
                            </div>
                            <div class="form-group">
                                <label for="title">trucks_no</label>
                                <input type="text" class="form-control pt-4 pb-4" name="trucks_no" required>
                            </div>
                            <div class="form-group">
                                <label for="title">drying_air</label>
                                <input type="text" class="form-control pt-4 pb-4" name="drying_air" required>
                            </div>
                            <div class="form-group">
                                <label for="title">debarker</label>
                                <input type="text" class="form-control pt-4 pb-4" name="debarker" required>
                            </div>
                            <div class="form-group">
                                <label for="title">hand_saw</label>
                                <input type="text" class="form-control pt-4 pb-4" name="hand_saw" required>
                            </div>
                            <div class="form-group">
                                <label for="title">band_saw</label>
                                <input type="text" class="form-control pt-4 pb-4" name="band_saw" required>
                            </div>
                            <div class="form-group">
                                <label for="title">amount1</label>
                                <input type="text" class="form-control pt-4 pb-4" name="amount1" required>
                            </div>

                            <div class="d-flex">
                                <button style="text-transform: uppercase;" name="register" class="btn btn-success  mr-3 ">Register</button>


                        </form>
                        <a href="./login.php" style="text-transform: uppercase;" class="nav-link">Sign in</a>
                        </div>


                    </div>
                </div>
            </div>
            <!-- <div class="col-sm-6">
                <div class="panel-side-img">
                    <div style="margin-top: 10rem; margin-top: 10rem; padding-top: 5rem; background-size: cover;" class="pt-5 mt-5">
                        <img src="./assets/Mobile login-amico.svg" class="img-fluid " alt="" srcset="">
                    </div>
                </div>
            </div> -->
        </div>


    </div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>

</html>