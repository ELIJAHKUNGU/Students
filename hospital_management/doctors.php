<?php
    include 'sidebarpanel.php';
    ?>
        <div class="col-sm-9">
            <div class="d-flex">
                <div class="dashboard-text mt-3">
                    <h2>Doctors </h2>
                </div>
                <div class="ml-auto">
                    <div class="d-flex">
                        <i class="fas ml-5 mt-4 fa-bars"></i>
                        <i class="fas ml-5 mt-4 fa-bars"></i>
                        <i class="fas ml-5 mt-4 fa-bars"></i>
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
            <div class="d-flex mb-5">
                <div class="d-block ml-4">
                    <button style="background-color: #5EC961; color: #fff; border-radius: 20px;" class="btn pt-2 pb-2 pl-4 pr-4">Add  Doctor</button>
                </div>

            </div>
            <?php
             if (isset($_GET['error'])) { ?>
                <p class="alert alert-danger" role="alert"><?php echo $_GET['error']; ?></p>
                <?php } ?>
        
                <?php if (isset($_GET['success'])) { ?>
                <p class="alert alert-primary" role="alert"><?php echo $_GET['success']; ?></p>
                <?php } ?>

            <table id="table_id" class="display mt-2">
                <thead>
                    <tr>
                        <!-- <th></th> -->
                        <th>ID</th>
                        <th>Date Join</th>
                        <th>Doctor Name</th>
                        <th>Specialist</th>
                        <th>Scheduled Appointment</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      require 'db.php';
                      $qry = "SELECT * FROM `doctors`";
                      $products =$conn->query($qry);
                      while ($row= $products->fetch_assoc())
                      {
                        
                      ?>

<!-- `doctor_id`, `doctor_username`, `doctor_phNo`, `doctor_title`, `salary`, 
`doctor_name`, `specialist`, `status`, `address`, `Telephone`, `doctor_notes`) -->

                    <tr>
                        <!-- <td><img src="./assets/1.jpg" style="height:80px; border-radius:100%" class="img-fluid" alt="" srcset=""></td> -->
                        <td> <?php echo '#D-00'.$row['doctor_id']  ?> </td>
                        <td>26/01/2020</td>
                        <td><?php echo $row['doctor_title']  ?> <?php echo $row['doctor_username']  ?>  </td>
                        <td><?php echo $row['specialist']  ?></td>
                        <td>
                          
                            <a href="./appointments.php"><Button class="btn btn-outline-success">
                                <?php
                                 require 'db.php';
                                 $doctor_id = $row['doctor_id']; 
                                 $sql="SELECT * FROM `appointments` where doctor_id=$doctor_id ";
                                 
                                $result= mysqli_query($conn, $sql);
                                $results = mysqli_num_rows($result);
                                   echo $results;
                                 
                                


                                 ?>

                                Appointment</Button></a>
                        </td>
                        <td><?php echo $row['Telephone']  ?></td>
                        <td style="color:green"><?php echo $row['status']  ?></td>
                        <td ><a href='ddelete.php?id=<?php echo $row['doctor_id']?>'><I class='fas fa-trash'></I></a>
</td>
                    </tr>
                    <?php
                      }
                    ?>
                    <!-- <tr>
                        <td><img src="./assets/1.jpg" style="height:80px; border-radius:100%" class="img-fluid" alt="" srcset=""></td>
                        <td>#p-0012</td>
                        <td>26/01/2020</td>
                        <td>Dr Samantha</td>
                        <td>Dentist</td>
                        <td>
                            <Button>5 Appointment</Button>
                        </td>
                        <td>+2547 4377 0216</td>
                        <td>Unavailable</td>
                    </tr>
                    <tr>
                        <td><img src="./assets/1.jpg" style="height:80px; border-radius:100%" class="img-fluid" alt="" srcset=""></td>
                        <td>#p-0012</td>
                        <td>26/01/2020</td>
                        <td>Dr Samantha</td>
                        <td>Dentist</td>
                        <td>
                            <Button>5 Appointment</Button>
                        </td>
                        <td>+2547 4377 0216</td>
                        <td>Unavailable</td>
                    </tr>
                    <tr>
                        <td><img src="./assets/1.jpg" style="height:80px; border-radius:100%" class="img-fluid" alt="" srcset=""></td>
                        <td>#p-0012</td>
                        <td>26/01/2020</td>
                        <td>Dr Samantha</td>
                        <td>Dentist</td>
                        <td>
                            <Button>5 Appointment</Button>
                        </td>
                        <td>+2547 4377 0216</td>
                        <td>Unavailable</td>
                    </tr>
                    <tr>
                        <td><img src="./assets/1.jpg" style="height:80px; border-radius:100%" class="img-fluid" alt="" srcset=""></td>
                        <td>#p-0012</td>
                        <td>26/01/2020</td>
                        <td>Nurse</td>
                        <td>Dentist</td>
                        <td>
                            <Button>5 Appointment</Button>
                        </td>
                        <td>+2547 4377 0216</td>
                        <td>Unavailable</td>
                    </tr> -->
                </tbody>
            </table>


        </div>


    </div>



    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
</body>

</html>