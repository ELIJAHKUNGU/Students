
    <style>
        body {
            background-color: #E5E5E5;
        }
        
        .btn {
            background-color: green;
            color: #fff;
            border-radius: 15px;
        }
        
        .btn:hover {
            background-color: rgb(222, 223, 222);
            color: rgb(17, 153, 51);
        }
    </style>
    <?php
    include 'sidebarpanel.php';
    ?>
  
        <div class="col-sm-9">
        <div class="d-flex">
                <div class="dashboard-text mt-3">
                    <h2>Appointment</h2>
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
            <div class="d-flex mb-5">
                <div class="d-block ml-2">
                    <a href="./patients.php">
                        <button style="background-color: #5EC961; color: #fff; border-radius: 20px;" class="btn pt-2 pb-2 pl-4 pr-4">
                        Create Appointment
                      </button>
                    </a>
                </div>

            </div>
            <?php
             if (isset($_GET['error'])) { ?>
                <p class="alert alert-danger" role="alert"><?php echo $_GET['error']; ?></p>
                <?php } ?>
        
                <?php if (isset($_GET['success'])) { ?>
                <p class="alert alert-primary" role="alert"><?php echo $_GET['success']; ?></p>
                <?php } ?>

            <table id="patient" class="display  mt-2" style="border: 2px solid gray;">
                <thead>
                    <tr>
                        <th>Appointment ID</th>

                        <th>Patient ID</th>
                        <th>Date Check in</th>
                        <th>Patient Name</th>
                        <th>Doctor Assigned</th>
                        <th>Appointment Activity</th>


                        <th>Send Reminder</th>

                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                <?php
                      require 'db.php';
                      $sql="SELECT * FROM `appointments`";
                      $result = mysqli_query($conn, $sql);
                      $row2 = mysqli_fetch_assoc($result);
                      $doctor_id = $row2['doctor_id'];

                    
                      
                     
                      $doctor_name = $row2['doctor_name'];
                      echo $doctor_name;
                      $qry = "SELECT * FROM `appointments` order by appointment_id DESC";
                      $products =$conn->query($qry);
                      while ($row= $products->fetch_assoc())
                      {
                          ?>
                        
                      
<!-- //                         `appointments`(`appointment_id`, `patient_id`, `pateint_name`, `appointment_activity`,
//  `doctor_id`, `scheduled_month`, `scheduled_time -->
              
              <tr>
                        <td>#AP-00<?php echo $row['appointment_id']?></td>
                        <td>#p-00<?php echo $row['patient_id']?></td>
                        <td><?php echo $row['scheduled_month']?> <?php echo $row['scheduled_time']?> </td>
                        <td><?php echo $row['pateint_name']?></td>
                      
                        <td><?php
                         $doctor_id= $row['doctor_id'];

                         $sql="SELECT * FROM `doctors` WHERE  doctor_id= $doctor_id";
                         $result = mysqli_query($conn, $sql);
                         $row2 = mysqli_fetch_assoc($result);
                         $doctor_name = $row2['doctor_name'];
                         echo $doctor_name;
                         ?>
                         
                         
                        </td>
                        <td><?php echo $row['appointment_activity']?></td>
                        
                        
                        <td>  <a href='sendemail.php?id=<?php echo $row['appointment_id']?>'><button>Send Email</button></a>  </td>
                        <td>
                        <a href='appointmentdelete.php?id=<?php echo $row['appointment_id']?>'><I class='fas fa-trash'></I></a>
                      </td>
                    </tr>
                    <?php
                      
                    }
                    ?>

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
            $('#patient').DataTable();
        });
    </script>
</body>

</html>