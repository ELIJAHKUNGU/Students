
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
                    <h2>Top Rated Doctors</h2>
                </div>
                <div class="ml-auto">
                    <div class="d-flex">
                        <i class="fas ml-5 mt-4 fa-bars"></i>
                        <i class="fas ml-5 mt-4  fa-bell"></i>
                       
                        
                        <div class="dashboard-admin ml-5 mt-2">
                            <div class="d-flex">
                                <div class="d-block bg-primary-color">
                                    <h5>
                                        <?php
                                        // echo $user_id;
                                        require 'db.php';
                                         $sql="SELECT * FROM `users` where user_id = '$user_id'";
                                         $result = mysqli_query($conn, $sql);
                                         $row2 = mysqli_fetch_assoc($result);
                                         $full_name = $row2['full_name'];
                                         echo $full_name;

                                          ?>
                                    </h5>
                                    <h6 class="ml-4">
                                        <?php echo $name = $row2['username']; ?>
                                    </h6>
                                </div>
                                <!-- <div class="user-img ml-4 border">
                                    <img src="./assets/logo.png" class="img-fluid" style="max-height: 50px;" alt="" srcset="">
                                </div> -->
                                <div class="">
                                   <a href="./logout.php" class="mt-1 nav-link">
                                       <button class="btn bg-primary-color">Logout</button>
                                   </a>
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
                      $qry = "SELECT * FROM `doctors`  ORDER BY RAND () LIMIT 5";
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
                                        <?php
                            $gender = $row['gender'];
                            if($gender == 'Male'){
                                ?>
                                <img src="./assets/male.png"  style="height: 100px;" class="img-fluid doctor" alt="" srcset="">
                                <?php 
                                

                            }else{
                                ?>
                            <img src="./assets/d2.svg" style="height: 100px;"  class="img-fluid doctor" alt="" srcset="">


                                <?php
                            }


                            ?>
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