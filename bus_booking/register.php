<?php 
include 'header.php';
?>
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
                
                header("location:register.php?success=Your account has been  successfully created login" );
                exit();

          }else{
            header("location:register.php?error=unknown error occurred&$email");
             }

    }


}
if (isset($_POST["save"])) {
    require "db.php";
    extract($_POST);
    $sql = "select * from users where email='$email' and password='$password' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) ==TRUE){
        //success

        $info = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["info"] = $info;
        header("location:dashboard.php?success=You are  succesfully logged");
    }else{
        header("location:register.php?error= Wrong Email Address or Password");


    }
}

?>
        <!-- !Primary Navigation -->

    </header>
    <div class="account-page">
        <div class="container">
            <div class="row">

                <div class="col-6">
                <?php

                if (isset($_GET['error'])) { ?>
                <p class="text-danger"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                <p class="text-success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator2">

                        </div>
                        <form action="" method="post" id="LoginForm">
                            <label for="">Enter Your Email Address Here...</label>
                            <input type="email" name="email" class="form-control" id="">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" id="">
                            <button type="submit" name="save" class="btn pl-2 pr-2 btn-success mt-2">login</button>
                        </form>
                        <style>
                            #RegForm button .btn-primary-color {
                                background-color: #012547 !important;
                                color: #fff;
                                height: 40px;
                                width: 300px !important;
                            }
                        </style>
                        <form action="" method="post" id="RegForm">>
                            <label for="">Full Name</label>
                            <input type="text" name="name"  class="form-control mt-2 pt-4 pb-4" id="">

                            <label for="">Email</label>
                            <input type="text" name="email"  class="form-control mt-2 pt-4 pb-4" id="">
                            <label for="">Phone Number</label>
                            <input type="text" name="phoneNumber"  class="form-control mt-2 pt-4 pb-4" id="">
                            <div class="d-flex">
                                <div class="d-block">
                                    <label for="">Password</label>
                                    <input type="text" name="password"  class="form-control mt-2 pt-4 pb-4" id="">
                                </div>
                                
                            </div>
                            <button type="submit" name="register" class="btn btn-success mt-2">Register</button>
                        </form>

                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="./images/login.svg" id="login-up-img" alt="" srcset="">

                    <img src="./images/Mobile login-pana.svg" id="sign-up-img" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
    <!--footer-->

    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator2");
        var image_sign = document.getElementById("sign-up-img")
        var image_login = document.getElementById("login-up-img")


        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
            LoginForm.style.display = "none"
            RegForm.style.display = "block"
            image_sign.style.display = "block"
            image_login.style.display = "none"

        }

        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(-20px)";
            RegForm.style.display = "none";
            LoginForm.style.display = "block"
            image_sign.style.display = "none"
            image_login.style.display = "block"


        }
    </script>





    <!--   footer-->
</body>

</html>