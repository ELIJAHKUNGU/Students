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
        <link rel="stylesheet" href="./DataTables/datatables.min.css">

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
                <div class="col-sm-3 pl-4">
                    <div class="mt-3">
                        <div class="d-flex">

                            <span class="ml-2 mt-3"> 
                            <i class="fas fa-4x user-company  fa-user mr-2"></i>

                       <?php
                        require 'config.php';
                        echo   $company_name; 


                        ?>
                        </span>
                        </div>
                        <span>user ID: 
                        <?php
                        require 'config.php';
                        echo   $user_id; 
                        require 'db.php';
            


                        ?>
                    </span>
                    </div>
                    <div class="mt-3">
                        <div class="dashboard-links">
                            <a class="nav-item" href="./customerdashboard.php">
                                <li><i class="fas mr-3 fa-home text-white"></i>Home </li>
                            </a>
                            <a class="nav-item" href="./userdetails.php">
                                <li><i class="fas mr-3 fa-user text-white"></i>User Details </li>
                            </a>
                            <a class="nav-item" href="./rating.php">
                                <li><i class="fas mr-3 fa-briefcase text-white"></i> Rating </li>
                            </a>
                            <a class="nav-item" href="./orders.php">
                                <li><i class="fas mr-3 text-white fa-plus"></i>Orders</li>
                            </a>
                            <a class="nav-item" href="./deliveries.php">
                                <li><i class="fas mr-3 text-white fa-plus"></i>Deliveries</li>
                            </a>
                        </div>
                    </div>
                </div>



                <div class="col-sm-9 ">
               <?php
                
                $sql="select * from order_product where  ";
                $result= mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                extract($row);

                
                $sql="select * from order1 ";
                $result= mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                extract($row);


                


                ?>
                    <div class="shadow">
                        <div class=" ">
                            <h2 class=" text-center pt-5 font-weight-bold" style="font-size: 25px">

                            </h2>
                        </div>
                        <div class="card-body">
                            <?php 
                            if (isset($_POST["save"])) {
                                require 'db.php';
                                extract($_POST);
                            
                                    $sql = "INSERT INTO `order_product`( `order_product`) VALUES ('$product')";
                                    $result =  mysqli_query($conn, $sql);
                                    if ($result){
                                        header("location:.php?success=Your account has been  successfully created login");
                                        exit();
                            
                                    }else{
                                        header("location:quiz.php?error=Yerroe");
                                    }
                            
                              
                               
                            
                            
                            }


                            ?>



                            <form action="" method="post" class="mt-5">
                                <select name="product" id="" class="form-control mt-5">
                                    <option value="">Choose the product</option>
                                    <option value="Timber">Timber </option>
                                    <option value="Firewood">Firewood</option>
                                    <option value="Timber">Timber </option>
                                    <option value="Firewood">Firewood</option>
                                </select>
                                <button name="save" class="btn btn-success mt-2 pl-5 pr-5">Next</button>


                            </form>
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