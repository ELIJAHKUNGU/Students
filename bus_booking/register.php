<?php 
include 'header.php';
?>
        <!-- !Primary Navigation -->

    </header>
    <div class="account-page">
        <div class="container">
            <div class="row">

                <div class="col-6">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator2">

                        </div>
                        <form action="" id="LoginForm">
                            <input type="text" class="form-control mt-2 pt-4 pb-4" placeholder="  Username ">
                            <input type="password" class="form-control mt-2 pt-4 pb-4" placeholder=" Password ">
                            <button type="submit" class="form-control mt-2 " class="btn btn-primary-color ">Login</button>

                        </form>
                        <style>
                            #RegForm button .btn-primary-color {
                                background-color: #012547 !important;
                                color: #fff;
                                height: 40px;
                                width: 300px !important;
                            }
                        </style>
                        <form action="" id="RegForm">
                            <input type="text" class="form-control mt-2 pt-4 pb-4" placeholder="  Full Name  " required>
                            <input type="email" class="form-control mt-2 pt-4 pb-4" placeholder=" Email " required>
                            <input type="password" class="form-control mt-2 pt-4 pb-4" placeholder=" Password" required>
                            <button type="submit" class="form-control mt-2 " class="btn btn-primary-color bg-danger">Register</button>
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