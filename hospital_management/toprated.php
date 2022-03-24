
        <style>
            body {
                background-color: #E5E5E5;
            }
            
            .social-buttons i {
                font-size: 30px;
                border: 2px solid grey;
                border-radius: 100%;
                padding: 10px;
            }
            
            .social-buttons .fa-facebook {
                color: blue;
            }
            
            .social-buttons .fa-instagram {
                color: red;
            }
            
            .social-buttons .fa-twitter {
                color: rgb(47, 115, 241);
            }
            
            .user-img img {
                border-radius: 50px;
            }
            
            .row .col-sm-6 {
                border-radius: 10px;
            }
        </style>
        <?php
    include 'sidebarpanel.php';
    ?>

            <div class="col-sm-9">
                <div class="d-flex">
                    <div class="dashboard-text mt-3">
                        <h2>Top Rated Profiles </h2>
                    </div>
                    <div class="ml-auto">
                        <div class="d-flex">
                            <i class="fas ml-5 mt-4 fa-bars"></i>
                            <i class="fas ml-5 mt-4 fa-bars"></i>
                            <i class="fas ml-5 mt-4 fa-bars"></i>
                            <div class="dashboard-admin ml-5 mt-2">
                                <div class="d-flex">
                                    <div class="d-block">
                                        <h5>JOHN DOE</h5>
                                        <h6 class="ml-4">Admin</h6>
                                    </div>
                                    <div class="user-img ml-4 border">
                                        <img src="./assets/logo.png" class="img-fluid" style="max-height: 50px;" alt="" srcset="">
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <hr>

                <div class="mt-3">
                    <div class="row">
                    <?php
                      require 'db.php';
                      $qry = "SELECT * FROM `doctors` LIMIT 5";
                      $products =$conn->query($qry);
                      while ($row= $products->fetch_assoc())
                      {
                        
                        
                      ?>
                      <!-- `doctor_id`, `doctor_username`, `doctor_phNo`, `doctor_title`, `salary`, 
`doctor_name`, `specialist`, `status`, `address`, `Telephone`, `doctor_notes`) -->
                        <div class="col-sm-6   ml-5 mt-3 card ">
                            <div class="d-flex">
                                <div class="image-banner">
                                    <div class="d-block">
                                        <div class="user-img">
                                            <img src="./assets/1.jpg" style="height: 100px;" class="img-fluid" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                                <div class="user-details ml-3">
                                    <div class="d-block">
                                        <h4 class="text-black"><?php echo $row['doctor_title']  ?> <?php echo $row['doctor_name']  ?>  <?php echo $row['doctor_username']  ?></h4>
                                        <h4> <?php echo $row['specialist']  ?></h4>
                                        <div class="rating ">
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star-half-alt"></i>
                                            <span>238 Reviews</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex social-buttons mb-4 ml-5 mt-3">
                                <div class="d-flex">
                                    <i class="fab  ml-3  fa-instagram"></i>
                                    <i class="fab  ml-3 fa-twitter"></i>
                                    <i class="fab  ml-3 fa-facebook"></i>
                                    <i class="fab  ml-3 fa-pinterest"></i>
                                </div>
                            </div>
                        </div>
                        <?php
                      }
                        ?>
                        <!-- <div class="col-sm-6   ml-5 mt-3 card ">
                            <div class="d-flex">
                                <div class="image-banner">
                                    <div class="d-block">
                                        <div class="user-img">
                                            <img src="./assets/1.jpg" style="height: 100px;" class="img-fluid" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                                <div class="user-details ml-3">
                                    <div class="d-block">
                                        <h4 class="text-black"> Dr. Abdul Aziz Lazis</h4>
                                        <h4> Physical Therapy</h4>
                                        <div class="rating ">
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star-half-alt"></i>
                                            <span>238 Reviews</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex social-buttons mb-4 ml-5 mt-3">
                                <div class="d-flex">
                                    <i class="fab  ml-3  fa-instagram"></i>
                                    <i class="fab  ml-3 fa-twitter"></i>
                                    <i class="fab  ml-3 fa-facebook"></i>
                                    <i class="fab  ml-3 fa-pinterest"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6   ml-5 mt-3 card ">
                            <div class="d-flex">
                                <div class="image-banner">
                                    <div class="d-block">
                                        <div class="user-img">
                                            <img src="./assets/1.jpg" style="height: 100px;" class="img-fluid" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                                <div class="user-details ml-3">
                                    <div class="d-block">
                                        <h4 class="text-black"> Dr. Abdul Aziz Lazis</h4>
                                        <h4> Physical Therapy</h4>
                                        <div class="rating ">
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star-half-alt"></i>
                                            <span>238 Reviews</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex social-buttons mb-4 ml-5 mt-3">
                                <div class="d-flex">
                                    <i class="fab  ml-3  fa-instagram"></i>
                                    <i class="fab  ml-3 fa-twitter"></i>
                                    <i class="fab  ml-3 fa-facebook"></i>
                                    <i class="fab  ml-3 fa-pinterest"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6   ml-5 mt-3 card ">
                            <div class="d-flex">
                                <div class="image-banner">
                                    <div class="d-block">
                                        <div class="user-img">
                                            <img src="./assets/1.jpg" style="height: 100px;" class="img-fluid" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                                <div class="user-details ml-3">
                                    <div class="d-block">
                                        <h4 class="text-black"> Dr. Abdul Aziz Lazis</h4>
                                        <h4> Physical Therapy</h4>
                                        <div class="rating ">
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star-half-alt"></i>
                                            <span>238 Reviews</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex social-buttons mb-4 ml-5 mt-3">
                                <div class="d-flex">
                                    <i class="fab  ml-3  fa-instagram"></i>
                                    <i class="fab  ml-3 fa-twitter"></i>
                                    <i class="fab  ml-3 fa-facebook"></i>
                                    <i class="fab  ml-3 fa-pinterest"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6   ml-5 mt-3 card ">
                            <div class="d-flex">
                                <div class="image-banner">
                                    <div class="d-block">
                                        <div class="user-img">
                                            <img src="./assets/1.jpg" style="height: 100px;" class="img-fluid" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                                <div class="user-details ml-3">
                                    <div class="d-block">
                                        <h4 class="text-black"> Dr. Abdul Aziz Lazis</h4>
                                        <h4> Physical Therapy</h4>
                                        <div class="rating ">
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star-half-alt"></i>
                                            <span>238 Reviews</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex social-buttons mb-4 ml-5 mt-3">
                                <div class="d-flex">
                                    <i class="fab  ml-3  fa-instagram"></i>
                                    <i class="fab  ml-3 fa-twitter"></i>
                                    <i class="fab  ml-3 fa-facebook"></i>
                                    <i class="fab  ml-3 fa-pinterest"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6   ml-5 mt-3 card ">
                            <div class="d-flex">
                                <div class="image-banner">
                                    <div class="d-block">
                                        <div class="user-img">
                                            <img src="./assets/1.jpg" style="height: 100px;" class="img-fluid" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                                <div class="user-details ml-3">
                                    <div class="d-block">
                                        <h4 class="text-black"> Dr. Abdul Aziz Lazis</h4>
                                        <h4> Physical Therapy</h4>
                                        <div class="rating ">
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star-half-alt"></i>
                                            <span>238 Reviews</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex social-buttons mb-4 ml-5 mt-3">
                                <div class="d-flex">
                                    <i class="fab  ml-3  fa-instagram"></i>
                                    <i class="fab  ml-3 fa-twitter"></i>
                                    <i class="fab  ml-3 fa-facebook"></i>
                                    <i class="fab  ml-3 fa-pinterest"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6   ml-5 mt-3 card ">
                            <div class="d-flex">
                                <div class="image-banner">
                                    <div class="d-block">
                                        <div class="user-img">
                                            <img src="./assets/1.jpg" style="height: 100px;" class="img-fluid" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                                <div class="user-details ml-3">
                                    <div class="d-block">
                                        <h4 class="text-black"> Dr. Abdul Aziz Lazis</h4>
                                        <h4> Physical Therapy</h4>
                                        <div class="rating ">
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star-half-alt"></i>
                                            <span>238 Reviews</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex social-buttons mb-4 ml-5 mt-3">
                                <div class="d-flex">
                                    <i class="fab  ml-3  fa-instagram"></i>
                                    <i class="fab  ml-3 fa-twitter"></i>
                                    <i class="fab  ml-3 fa-facebook"></i>
                                    <i class="fab  ml-3 fa-pinterest"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6   ml-5 mt-3 card ">
                            <div class="d-flex">
                                <div class="image-banner">
                                    <div class="d-block">
                                        <div class="user-img">
                                            <img src="./assets/1.jpg" style="height: 100px;" class="img-fluid" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                                <div class="user-details ml-3">
                                    <div class="d-block">
                                        <h4 class="text-black"> Dr. Abdul Aziz Lazis</h4>
                                        <h4> Physical Therapy</h4>
                                        <div class="rating ">
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star-half-alt"></i>
                                            <span>238 Reviews</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex social-buttons mb-4 ml-5 mt-3">
                                <div class="d-flex">
                                    <i class="fab  ml-3  fa-instagram"></i>
                                    <i class="fab  ml-3 fa-twitter"></i>
                                    <i class="fab  ml-3 fa-facebook"></i>
                                    <i class="fab  ml-3 fa-pinterest"></i>
                                </div>
                            </div>
                        </div> -->
                    </div>

                </div>


            </div>


            <script src="./js/jquery.min.js"></script>
            <script src="./js/bootstrap.min.js"></script>
            <script src="./js/bootstrap.js"></script>
    </body>

    </html>