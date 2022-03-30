<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


if (isset($_GET["id"])){
    $id = $_GET["id"];
    require 'db.php';
    $sql="SELECT * FROM `patients` WHERE  patient_id= $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    extract($row);
}




if (isset($_POST["save"])) {
    $conn = mysqli_connect("localhost","root","","hosi");
    extract($_POST);
$sql = "INSERT INTO `appointments`(`patient_id`, `pateint_name`, `appointment_activity`, `doctor_id`, `scheduled_month`, `scheduled_time`)
 VALUES ('$patient_id','$pateint_name','$appointment_activity','$doctor_id','$s_m','$s_time')";
if ($conn->query($sql) === TRUE) {

    header("location:index.php?success=Appointment have scheduled successfully ");

} else {
    header("location:cart.php?error=Your Appointment was not scheduled  +2547  220 000");


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
                    <h2>Create Appointment</h2>
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
                    <div class="p-2">
                        <div class="d-flex">
                            <h3>Hi ! Let's <span class="text-success"> create an Appointment</span> </h3>
                            <h5 class="ml-auto">Form / <span class="text-success">Validation</span> </h5>
                        </div>
                        <div class="p-2 shadow mb-5 " style="background-color: white;">
                            <div class="form-valiadtion">
                                <h4 class="ml-5">Form Validation Data</h4>
                                <form action="" method="POST">
                                    <div class="pl-5 pr-5">
                                        <div class="pl-5 pr-5">
                                            <div class="form-group">
                                                <label for="">Patient ID</label>
                                                <input type="text" class="form-control" disabled value="<?=$patient_id?>" name="patient_id" id="">
                                            </div>
                                            
                                           
                                            <div class="form-group">
                                                <label for="">pateint_name</label>
                                                <input type="text"  class="form-control"  disabled value="<?=$patient_name?>"    >
                                                <input type="hidden" class="form-control"  value="<?=$patient_name?>"  name="pateint_name" id=""  >
                                            </div>
                                            <div class="form-group">
                                                <label for="">Select Appointment Activity</label>
                                                <select name="appointment_activity" id="" class="form-control">
                                                <option value="Screening">Select</option>
                                                <option value="Therapy">Therapy</option>
                                                <option value="Consulation">Consulation</option>
                                                <option value="Screening">Screening</option>
                                               
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                            <?php

                                                //Connect to our MySQL database using the PDO extension.
                                                $pdo = new PDO('mysql:host=localhost;dbname=hosi', 'root', '');

                                                //Our select statement. This will retrieve the data that we want.
                                                $sql = "SELECT  doctor_id, doctor_name FROM doctors";

                                                //Prepare the select statement.
                                                $stmt = $pdo->prepare($sql);

                                                //Execute the statement.
                                                $stmt->execute();

                                                //Retrieve the rows using fetchAll.
                                                $users = $stmt->fetchAll();

                                            ?>
                                                
                                                <label for="">Select Doctor</label>
                                                <select name="doctor_id" class="form-control" required id="">
                                                   
                                                    <?php foreach($users as $user): ?>
                                                        <option value="<?= $user['doctor_id']; ?>"><?= $user['doctor_name']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                              <div class="d-flex">
                                              <input type="date" name="s_m" class="form-control mr-3" required id="">
                                              <input type="time" name="s_time" class="form-control " required id="">
                                              </div>
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