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
            <div class="d-flex mb-5">
                <div class="d-block ml-4">
                    <button style="background-color: #5EC961; color: #fff; border-radius: 20px;" class="btn pt-2 pb-2 pl-4 pr-4">Add  Doctor</button>
                </div>

            </div>

            <table id="table_id" class="display mt-2">
                <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Date Join</th>
                        <th>Doctor Name</th>
                        <th>Specialist</th>
                        <th>Schedule</th>
                        <th>Contact</th>
                        <th>Status</th>
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
                        <td><img src="./assets/1.jpg" style="height:80px; border-radius:100%" class="img-fluid" alt="" srcset=""></td>
                        <td> <?php echo '#D-00'.$row['doctor_id']  ?> </td>
                        <td>26/01/2020</td>
                        <td><?php echo $row['doctor_title']  ?> <?php echo $row['doctor_username']  ?>  </td>
                        <td><?php echo $row['specialist']  ?></td>
                        <td>
                            <Button class="btn btn-outline-success">5 Appointment</Button>
                        </td>
                        <td><?php echo $row['Telephone']  ?></td>
                        <td style="color:green"><?php echo $row['status']  ?></td>
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