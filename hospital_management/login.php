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
                        <form action="login.php" method="post">

                            <div class="form-group">
                                <label for="title">Email</label>
                                <input type="email" class="form-control pt-4 pb-4" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="title">Password</label>
                                <input type="password" class="form-control pt-4 pb-4" name="password" required>
                            </div>

                            <div class="d-flex justify-content-center mt-2 mb-2">
                                <button style="text-transform: uppercase;" class="btn btn-outline-primary pl-5 pr-5 ">Sign in</button>
                            </div>

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