
    <div class="main-page">
        <!-- <div class="container mt-4">
            <div class="row">
                <div class="col-sm-2">
                    <div class="title">
                        <a href="./index.php">
                            <h6>BOOKIE 😊</h6>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="search-bar">
                        <input type="search" placeholder="search entire store here" />

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="d-flex">

                        <a href="./login.php" class="nav-link">Sign Up</a>
                        <a href="./login.php" class="nav-link">Register user</a>
                        <i class="fa fa-chevron-down pt-3"></i>

                        <i class="fa fa-shopping-basket ml-3 pt-3"></i>
                    </div>
                </div>
            </div>
        </div> -->
        <?php
        include 'header.php';

        ?>
        
        <div class="container mb-5">
        <?php
        session_start();
        echo $user_id =  $info ['user_id'];
      

        if (isset($_GET['error'])) { ?>
        <p class="text-danger"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
        <p class="text-success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
            <div class="row">
                <div class="col-sm-3">

                    <div class="menu-category shadow">
                        <a href="">
                            <div class="menu-item-icons active mt-5 p-3">
                                <i class="fa fa-home"></i>
                                <h6>Browse Categories <i class="fa ml-2 fa-chevron-down "></i></h6>

                            </div>
                        </a>
                        <a href="">
                            <div class="menu-item-icon mt-2 p-3">
                                <i class="fa fa-shopping-cart"></i>
                                <h6> Biographies</h6>
                            </div>
                        </a>
                        <a href="">
                            <div class="menu-item-icon mt-2 p-3">
                                <i class="fa fa-truck"></i>
                                <h6>Business & Money</h6>
                            </div>
                        </a>
                        <a href="">
                            <div class="menu-item-icon mt-2 p-3">
                                <i class="fa fa-credit-card"></i>
                                <h6>Calendars</h6>
                            </div>
                        </a>
                        <a href="">
                            <div class="menu-item-icon mt-2 p-3">
                                <i class="fa fa-user"></i>
                                <h6>Children's Books</h6>
                            </div>
                        </a>
                        <a href="">
                            <div class="menu-item-icon mt-2 p-3">
                                <i class="fa fa-cogs"></i>
                                <h6>Comics</h6>
                            </div>
                        </a>
                        <a href="">
                            <div class="menu-item-icon mt-2 p-3">
                                <i class="fa fa-cogs"></i>
                                <h6>Performance Filters</h6>
                            </div>
                        </a>
                        <a href="">
                            <div class="menu-item-icon mt-2 p-3">
                                <i class="fa fa-cogs"></i>
                                <h6>Cookbooks</h6>
                            </div>
                        </a>
                        <a href="">
                            <div class="menu-item-icon mt-2 p-3">
                                <i class="fa fa-cogs"></i>
                                <h6>Accessories</h6>
                            </div>
                        </a>
                        <a href="">
                            <div class="menu-item-icon mt-2 p-3">
                                <i class="fa fa-cogs"></i>
                                <h6>Education</h6>
                            </div>
                        </a>
                        <a href="" style="text-decoration: none; color: #555;">
                            <div class="menu-item-icons mt-2 p-3">
                                <i class="fa fa-cogs"></i>
                                <h6>More Categories</h6>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-sm-9 mb-4">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="banner-text">
                                <h2>Book Mockup</h2>
                                <h1>HARDCOVER</h1>
                                <p>Cover up the front book and leave summary</p>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-outline-success">KSH 789 - Learn More</button>

                                </div>
                            </div>
                            <div class="banner-image">
                                <img src="./images/banner1.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="banner-text">
                                <h2>Book Mockup</h2>
                                <h1>HARDCOVER</h1>
                                <p>Cover up the front book and leave summary</p>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-outline-success">KSH 789 - Learn More</button>

                                </div>
                            </div>
                            <div class="banner-image">
                                <img src="./images/banner1.jpg" alt="">
                            </div>
                        </div>
                    </div>


                    <!-- <div class="menu">
                        <h1 class="ml-3 mt-3">Menu category</h1>
                        <div class="row menu-show">
                            <div class="my-card col-sm-2  shadow mt-3 ml-3">
                                <img src="/images/hamburger.png" class="" alt="" />
                                <span>Burger</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/pizza.png" alt="" />
                                <span>Pizza</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/milkshake.png" alt="" />
                                <span>Drink</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/hamburger.png" alt="" />
                                <span>Burger</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3 ml-3">
                                <img src="/images/hamburger.png" class="" alt="" />
                                <span>Burger</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/pizza.png" alt="" />
                                <span>Pizza</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/milkshake.png" alt="" />
                                <span>Drink</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/hamburger.png" alt="" />
                                <span>Burger</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3 ml-3">
                                <img src="/images/hamburger.png" class="" alt="" />
                                <span>Burger</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/pizza.png" alt="" />
                                <span>Pizza</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/milkshake.png" alt="" />
                                <span>Drink</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/hamburger.png" alt="" />
                                <span>Burger</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3 ml-3">
                                <img src="/images/hamburger.png" class="" alt="" />
                                <span>Burger</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/pizza.png" alt="" />
                                <span>Pizza</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/milkshake.png" alt="" />
                                <span>Drink</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/hamburger.png" alt="" />
                                <span>Burger</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3 ml-3">
                                <img src="/images/hamburger.png" class="" alt="" />
                                <span>Burger</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/pizza.png" alt="" />
                                <span>Pizza</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/milkshake.png" alt="" />
                                <span>Drink</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/hamburger.png" alt="" />
                                <span>Burger</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3 ml-3">
                                <img src="/images/hamburger.png" class="" alt="" />
                                <span>Burger</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/pizza.png" alt="" />
                                <span>Pizza</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/milkshake.png" alt="" />
                                <span>Drink</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/hamburger.png" alt="" />
                                <span>Burger</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3 ml-3">
                                <img src="/images/hamburger.png" class="" alt="" />
                                <span>Burger</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/pizza.png" alt="" />
                                <span>Pizza</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/milkshake.png" alt="" />
                                <span>Drink</span>
                            </div>
                            <div class="my-card col-sm-2 shadow mt-3  ml-3">
                                <img src="/images/hamburger.png" alt="" />
                                <span>Burger</span>
                            </div>
                        </div>
                    </div> -->

                </div>

            </div>
        </div>
    </div>
<?php
include 'footer.php';
?>