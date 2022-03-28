
   
            <?php
            include 'sidebar.php';
            ?>
            <div class="col-sm-9">
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
                <div class="row">
                    <div class="col-sm-6  p-0 ml-2 home">
                        <div class="d-flex pl-3 pr-3 pt-3">
                            <h6>Home </h6>
                            <i class="fas fa-home ml-auto"></i>
                        </div>
                        <div class="background-white p-0 ">
                            <a href="./index.php"> <button class="btn btn-info mt-5">View Panel</button></a>
                        </div>

                    </div>
                    <div class="col-sm-6  p-0 ml-2 user-details">
                        <div class="d-flex pl-3 pr-3 pt-3">
                            <h6> User Details </h6>
                            <i class="fas fa-user ml-auto"></i>
                        </div>
                        <div class="background-white p-0 ">
                            <a href="./userdetails.php"><button class="btn btn-warning text-white mt-5">View Panel</button></a>
                        </div>

                    </div>
                    <div class="col-sm-6  p-0 ml-2 rating">
                        <div class="d-flex pl-3 pr-3 pt-3">
                            <h6>Rating </h6>
                            <i class="fas fa-briefcase ml-auto"></i>
                        </div>
                        <div class="background-white p-0 ">
                            <a href="rating.php"><button class="btn btn-info ml-4 mt-5">View  Panel</button></a>
                        </div>
                    </div>
                    <div class="col-sm-6 p-0 ml-2 orders">
                        <div class="d-flex pl-3 pr-3 pt-3">
                            <h6>Orders </h6>
                            <i class="fas fa-plus ml-auto"></i>
                        </div>
                        <div class="background-white p-0 ">
                            <a href="./orders.php"><button class="btn btn-success ml-4 mt-5">View Panel</button></a>
                        </div>
                    </div>
                    <div class="col-sm-6 p-0 ml-2 home">
                        <div class="d-flex pl-3 pr-3 pt-3">
                            <h6>Confirmed Payments </h6>
                            <i class="fas fa-plus ml-auto"></i>
                        </div>
                        <div class="background-white p-0 ">
                            <a href="./orders_payments.php"><button class="btn btn-success ml-4 mt-5">View Panel</button></a>
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