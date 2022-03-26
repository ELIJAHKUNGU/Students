<?php
include 'sidebar.php';
//get the id
//retrieve the user
//display
//update the user
if (isset($_GET["id"])){
    $id = $_GET["id"];
    require 'db.php';
    $sql="SELECT * FROM `patients` WHERE  patient_id= $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    extract($row);
}

if (isset($_POST["save"])) {
    require 'db.php';
    extract($_POST);

 $sql = "UPDATE `patients` SET `patient_name`='$patient_name',`patient_age`='$patient_age',
 `phoneNumber`='$phoneNumber',`email`='$email',`other_diseases`='$other_diseases' WHERE  patient_id= $id";
 if ($conn->query($sql) === TRUE) {

    header("location:patients.php?success= Patients profile have been   updated successfully ");

} else {
    header("location:patients.php?error=Your Patients profile was not   updated  +2547  220 000");


}

$conn->close();

 


}
?>


    <style>
        body {
            background-color: #E5E5E5;
        }
        
        .row input {
            height: 45px;
        }
        
        .row select {
            height: 45px;
        }
        
        .btn {
            border-radius: 20px;
        }
        
        .row .shadow {
            border-radius: 20px;
        }
    </style>
   <?php
    include 'sidebarpanel.php';
    ?>

            <div class="col-sm-9">
                <div class="d-flex">
                    <div class="dashboard-text mt-3">
                        <h2>Doctors Profile </h2>
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

                <div class="mt-3">
                    <div class="p-2">
                        <div class="d-flex">
                            <h3>Hi ! Let's <span class="text-success">Capture Patient Data</span> </h3>
                            <h5 class="ml-auto">Form / <span class="text-success">Validation</span> </h5>
                        </div>
                        <div class="p-2 shadow mb-5 " style="background-color: white;">
                            <div class="form-valiadtion">
                                <h4 class="ml-5 pl-5">Form Validation Data</h4>
                                <form action="" method="POST">
                                    <div class="pl-5 pr-5">
                                        <div class="pl-5 pr-5">
                                            <div class="form-group">
                                                <label for="">Patient Name</label>
                                                <input type="text" class="form-control"  value ="<?php echo $row['patient_name'];?>" name="patient_name" id="">
                                            </div>
                                            
                                           
                                            <div class="form-group">
                                                <label for="">Age</label>
                                                <input type="number" class="form-control" value ="<?php echo $row['patient_age'];?>" name="patient_age" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Phone number</label>
                                                <input type="number" class="form-control" value ="<?php echo $row['phoneNumber'];?>" name="phoneNumber" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email Address</label>
                                                <input type="email" class="form-control" value ="<?php echo $row['email'];?>" name="email" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Other Diseases</label>
                                                <input type="text" class="form-control" value ="<?php echo $row['other_diseases'];?>" name="other_diseases" id="">
                                            </div>
                                            
                                            
                                        </div>


                                    </div>
                                          </div>

                                        <div class="ml-5 d-flex justify-content-center">
                                            <button style="background-color: green; color: #fff; min-width: 260px;" name="save" class="btn  pl-5 pr-5">Submit</button>
                                        </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>


        </div>


        <script src="./js/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/bootstrap.js"></script>
    </body>

    </html>