<?php
require_once 'security.php';
include 'sidebarpanel.php';

?>

        <div class="col-sm-9">
            <div class="d-flex">
                <div class="dashboard-text mt-3">
                    <h2>Dashboard</h2>
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
            <?php 
            if (isset($_GET['error'])) { ?>
                <p class="alert alert-danger" role="alert"><?php echo $_GET['error']; ?></p>
                <?php } ?>
        
                <?php if (isset($_GET['success'])) { ?>
                <p class="alert alert-primary" role="alert"><?php echo $_GET['success']; ?></p>
                <?php } ?>
            <div class="d-flex">
                <div class="d-block">
                    <h4>Welcome to Mediqu!</h4>
                    <h5>Hospital Admin Dashboard </h5>
                </div>
                <div class="ml-auto">
                    <div class="d-flex">
                        <div class="search">
                            <input type="search" disabled class="form-control" placeholder="Search here ">

                        </div>
                        <div class="settings-bar ml-3 bg-primary-color">
                            <i class="fa fa-user-alt mt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6  ml-5 mt-3 card gradient-bx text-white bg-danger ">
                    <div class="d-flex">
                        <div class="d-block">
                            <h5>Total Patient</h5>
                            <div class="d-flex">
                                <h4>
                                    <?php
                                    require 'db.php';
                                     $sql = "SELECT * FROM `patients`";
                                     $result= mysqli_query($conn, $sql);
                                   $results = mysqli_num_rows($result);
                                   echo $results. 'k';

                                    ?>
                                </h4>
                                <div class="ml-2">
                                    <img src="./assets/icon1.svg" alt="" srcset="">
                                </div>
                            </div>

                        </div>
                        <div class="ml-auto mt-2 pl-4 border-icon-img">
                            <img src="./assets/icon2.svg" alt="" srcset="">
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 ml-5 mt-3 bg-success">
                    <div class="d-flex">
                        <div class="d-block">
                            <h5>Doctor</h5>
                            <div class="d-flex">
                                <h4>
                                <?php 
                                    require 'db.php';

                                    $sql = "SELECT * FROM `doctors`";
                                    $result= mysqli_query($conn, $sql);
                                  $results = mysqli_num_rows($result);
                                  echo $results. 'k';
 

                                    ?>
                                </h4>
                                <div class="ml-5">
                                    <img src="./assets/icon1.svg" alt="" srcset="">

                                </div>
                            </div>

                        </div>
                        <div class="icon-bars">
                            <img src="./assets/icon8.svg" class="" alt="" srcset="">

                        </div>
                        <div class="ml-auto mt-2 pl-4 border-icon-img">
                            <img src="./assets/icon10.svg" alt="" srcset="">
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6  ml-5 mt-3 card gradient-bx text-white bg-primary ">
                    <div class="d-flex">
                        <div class="d-block">
                            <h5>Appointment</h5>
                            <div class="d-flex">
                                <h4>
                                    <?php 
                                    require 'db.php';

                                    $sql = "SELECT * FROM `appointments`";
                                    $result= mysqli_query($conn, $sql);
                                  $results = mysqli_num_rows($result);
                                  echo $results. 'k';
                                    ?>
                                </h4>
                                <div class="ml-2">
                                    <img src="./assets/icon1.svg" alt="" srcset="">

                                </div>
                            </div>

                        </div>
                        <div class="ml-auto mt-2 pl-4 border-icon-img">
                            <img src="./assets/icon7.svg" alt="" srcset="">
                        </div>

                    </div>
                </div>
                <!-- <div class="col-sm-6 ml-5 mt-3 bg-purple">
                    <div class="d-flex">
                        <div class="d-block">
                            <h5>Total Patient</h5>
                            <div class="d-flex">
                                <h4>784k</h4>
                                <div class="ml-5">
                                    <img src="./assets/icon1.svg" alt="" srcset="">

                                </div>
                            </div>

                        </div>
                        <div class="ml-auto mt-2 pl-4 border-icon-img">
                            <img src="./assets/icon6.svg" alt="" srcset="">
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row mb-5">
                <div class="col-sm-8 ml-5  pt-5 doctors shadow mt-5">
                    <h1>Top Rated Doctors</h1>
                    <div class="row">
                    <?php
                      require 'db.php';
                      $qry = "SELECT * FROM `doctors` ORDER BY Rand()  LIMIT 4";
                      $products =$conn->query($qry);
                      while ($row= $products->fetch_assoc())
                      {
                        
                        
                      ?>
                      <!-- `doctor_id`, `doctor_username`, `doctor_phNo`, `doctor_title`, `salary`, 
`doctor_name`, `specialist`, `status`, `address`, `Telephone`, `doctor_notes`) -->
                        <div class="col-sm-3 ">
                            <style>
                                .doctor{
                                    /* border:2px solid #000000;
                                    padding:5px;
                                    display: flex;
                                    justify-content: center;
                                    border: radius 30px !important; */
                                    
                                }

                            </style>
                            <?php
                            $gender = $row['gender'];
                            if($gender == 'Male'){
                                ?>
                                <img src="./assets/male.png"  class="img-fluid doctor" alt="" srcset="">
                                <?php 
                                

                            }else{
                                ?>
                            <img src="./assets/d2.svg"  class="img-fluid doctor" alt="" srcset="">


                                <?php
                            }


                            ?>
                            <h6 class="text-center"><?php echo $row['doctor_title']  ?> <?php echo $row['doctor_name']?> <?php echo $row['doctor_username']  ?></h6>
                            <p><?php echo $row['specialist']  ?>   </p>
                            <p><?php echo $row['status']  ?>  </p>
                            <div class="social-icons">
                                <i class="ml-2 fab fa-facebook"></i>
                                <i class="ml-2 fab fa-instagram"></i>
                                <i class="ml-2 fab fa-linkedin"></i>
                                <i class="ml-2 fab fa-pinterest"></i>
                            </div>
                        </div>
                        <?php
                      }
                        ?>
                        <!-- <div class="col-sm-3 ">
                            <img src="./assets/1.jpg" class="img-fluid" alt="" srcset="">
                            <h6 class="text-center">Dr Samuel</h6>

                            <p>796 Folsom Ave, Suite 600 Kiambu Aracade </p>
                            <div class="social-icons">
                                <i class="ml-2 fab fa-facebook"></i>
                                <i class="ml-2 fab fa-instagram"></i>
                                <i class="ml-2 fab fa-linkedin"></i>
                                <i class="ml-2 fab fa-pinterest"></i>
                            </div>
                        </div>
                        <div class="col-sm-3 ">
                            <img src="./assets/1.jpg" class="img-fluid" alt="" srcset="">
                            <h6 class="text-center">Dr Samuel</h6>

                            <p>796 Folsom Ave, Suite 600 Kiambu Aracade </p>
                            <div class="social-icons">
                                <i class="ml-2 fab fa-facebook"></i>
                                <i class="ml-2 fab fa-instagram"></i>
                                <i class="ml-2 fab fa-linkedin"></i>
                                <i class="ml-2 fab fa-pinterest"></i>
                            </div>
                        </div>
                        <div class="col-sm-3 ">
                            <img src="./assets/1.jpg" class="img-fluid" alt="" srcset="">
                            <h6 class="text-center">Dr Samuel</h6>

                            <p>796 Folsom Ave, Suite 600 Kiambu Aracade </p>
                            <div class="social-icons">
                                <i class="ml-2 fab fa-facebook"></i>
                                <i class="ml-2 fab fa-instagram"></i>
                                <i class="ml-2 fab fa-linkedin"></i>
                                <i class="ml-2 fab fa-pinterest"></i>
                            </div>
                        </div> -->
                    </div>
                    <hr>
                    <p class="text-center">Your health Care Paterns</p>

                </div>
                <div class="col-sm-4 patients ">
                    <div class="shadow">
                        <div class="d-flex">
                            <h4 class="ml-1">Recent Patient</h4>
                            <h6 class="ml-4">View More</h6>
                        </div>
                        <hr>
                        <?php
                        // patient_id`, `patient_name`, `patient_dr`, `patient_age`, `phoneNumber`, 
                        // `email`, `other_diseases`, `hiv_level`, `blood_group`, `getDate`, `status`
                      require 'db.php';
                      $qry = "SELECT * FROM `patients` ORDER BY Rand()  LIMIT 4";
                      $products =$conn->query($qry);
                      while ($row= $products->fetch_assoc())
                      {
                        
                        
                      ?>
                        <div class="pl-3">
                            <div class="d-flex">
                                <img src="./assets/pateint.png" class="img-fluid" style="height:80px" alt="" srcset="">
                                <div class="d-block ml-2">
                                    <h4><?php echo $row['patient_name']  ?></h4>
                                    <h5><?php echo $row['patient_age']  ?> years</h5>
                                </div>
                                <div class="mt-3 ml-2 mr-4">
                                    
                                    <a href="./patients.php">
                                        <button class="btn btn-secondary">Book </button>
                                    </a>
                                </div>
                            </div>
                            
                            <!-- <div class="d-flex">
                                <img src="./assets/bg2.jpg" class="img-fluid" style="height:80px" alt="" srcset="">
                                <div class="d-block ml-2">
                                    <h4>Aziz Bakree </h4>
                                    <h5>24 years</h5>
                                </div>
                                <div class="mt-3 ml-4">
                                    <h6 class="text-danger">Pending</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <img src="./assets/bg2.jpg" class="img-fluid" style="height:80px" alt="" srcset="">
                                <div class="d-block ml-2">
                                    <h4>Aziz Bakree </h4>
                                    <h5>24 years</h5>
                                </div>
                                <div class="mt-3 ml-4">
                                    <h6 class="text-danger">Pending</h6>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <img src="./assets/bg2.jpg" class="img-fluid" style="height:80px" alt="" srcset="">
                                <div class="d-block ml-2">
                                    <h4>Aziz Bakree </h4>
                                    <h5>24 years</h5>
                                </div>
                                <div class="mt-3 ml-4">
                                    <h6 class="text-danger">Pending</h6>
                                </div>
                            </div> -->
                            <hr>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>




        </div>
    </div>



  <?php
include 'footer.php';
  ?>