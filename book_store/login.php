<?php
include 'header.php';



?>
    
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Register </li>
            </ol>
        </nav>
        <?php

            if (isset($_GET['error'])) { ?>
            <p class="text-danger"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
            <p class="text-success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
        <div id="forms">
            <div class="row register">
                <div class="col-sm-6 mt-3 pb-4 pt-4 border">
                    <div class="mt-2">
                        <h4>New Customer</h4>

                        <h6>I am a new customer</h6>
                        <form action="register.php" method="post">
                            <label for="">Full Name</label>
                            <input type="text" name="name" class="form-control" id="">

                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" id="">
                            <label for="">Phone Number</label>
                            <input type="text" name="phoneNumber" class="form-control" id="">
                            <div class="d-flex">
                                <div class="d-block">
                                    <label for="">Password</label>
                                    <input type="text" name="password" class="form-control" id="">
                                </div>
                                <div class="d-block ml-2">
                                    <label for="" class="ml-2">Repeat Password</label>
                                    <input type="text" name="repeatpassword" class="form-control" id="">
                                </div>

                            </div>
                            <button type="submit" name="register" class="btn btn-success mt-2">Register</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 mt-3 pb-4 pt-4 border">
                    <div class="mt-2">
                        <h4>Returning Customer</h4>

                        <h6>I am a returning customer</h6>
                        <form action="register.php" method="post">
                            <label for="">Enter Your Email Address Here...</label>
                            <input type="email" name="email" class="form-control" id="">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" id="">
                            <button type="submit" name="save" class="btn pl-2 pr-2 btn-success mt-2">login</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php
include 'footer.php';



?>