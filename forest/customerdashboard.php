<?php
 require 'config.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/all.min.css" />
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <title>FOREST MANAGEMENT SYSTEM</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" class="nav-item" class="nav-item" href="show.php">FOREST MANAGEMENT SYSTEM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ml-auto mr-auto">
                    <a class="nav-link text-white" href="#">
                        <button class=" blink btn bg-light    text-dark" style="font-size:13px;" type="button" data-toggle="modal" data-target="#exampleModal" aria-expanded="false" aria-label="Toggle navigation">
                          Place Order
                          </button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                    <span>Welcome
                        <?php
                        require 'config.php';
                        echo   $user_name; 


                        ?>
                    </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>

            </ul>

        </nav>
        <?php
        if(isset($_GET['success'])){?>
            <div class="alert alert-primary text-center alert-dismissible fade show" role="alert">
                <?php
                echo $_GET['success'];
                ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
        }
        ?>
    </header>
    <div class="dashboard">
        <div class="row">
            <?php
            include 'sidebar.php';
            ?>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-3  p-0 ml-2 home">
                        <div class="d-flex pl-3 pr-3 pt-3">
                            <h6>Home </h6>
                            <i class="fas fa-home ml-auto"></i>
                        </div>
                        <div class="background-white p-0 ">
                            <a href="./index.php"> <button class="btn btn-info mt-5">View Panel</button></a>
                        </div>

                    </div>
                    <div class="col-sm-3  p-0 ml-2 user-details">
                        <div class="d-flex pl-3 pr-3 pt-3">
                            <h6> User Details </h6>
                            <i class="fas fa-user ml-auto"></i>
                        </div>
                        <div class="background-white p-0 ">
                            <a href="./employees.php"><button class="btn btn-warning text-white mt-5">View Panel</button></a>
                        </div>

                    </div>
                    <div class="col-sm-3  p-0 ml-2 rating">
                        <div class="d-flex pl-3 pr-3 pt-3">
                            <h6>Rating </h6>
                            <i class="fas fa-briefcase ml-auto"></i>
                        </div>
                        <div class="background-white p-0 ">
                            <a href="paymets.php"><button class="btn btn-info ml-4 mt-5">View  Panel</button></a>
                        </div>
                    </div>
                    <div class="col-sm-3 p-0 ml-2 orders">
                        <div class="d-flex pl-3 pr-3 pt-3">
                            <h6>Orders </h6>
                            <i class="fas fa-plus ml-auto"></i>
                        </div>
                        <div class="background-white p-0 ">
                            <a href="./addemployees.php"><button class="btn btn-success ml-4 mt-5">View Panel</button></a>
                        </div>
                    </div>
                    <div class="col-sm-3 p-0 ml-2 deliveries ">
                        <div class="d-flex pl-3 pr-3 pt-3">
                            <h6>Deliveries</h6>
                            <i class="fas fa-plus ml-auto"></i>
                        </div>
                        <div class="background-white p-0 ">
                            <a href="./addemployees.php"><button class="btn btn-success ml-4 mt-5">View Panel</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="./js/jquery.min.js "></script>
    <script src="./js/bootstrap.min.js "></script>
    <script src="./js/isotope.js "></script>
    <script src="./owl-carousel/js/owl.carousel.min.js"></script>
    <script src="./js/index.js"></script>

</body>

</html>