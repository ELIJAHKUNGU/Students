<?php

//Connect to our MySQL database using the PDO extension.
$pdo = new PDO('mysql:host=localhost;dbname=hosi', 'root', '');

//Our select statement. This will retrieve the data that we want.
$sql = "SELECT doctor_id, doctor_username FROM doctors";

//Prepare the select statement.
$stmt = $pdo->prepare($sql);

//Execute the statement.
$stmt->execute();

//Retrieve the rows using fetchAll.
$users = $stmt->fetchAll();

?>

<select>
    <?php foreach($users as $user): ?>
        <option value="<?= $user['doctor_id']; ?>"><?= $user['doctor_username']; ?></option>
    <?php endforeach; ?>
</select>










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
    require 'db.php';
    extract($_POST);
    
        $sql = "INSERT INTO `appointments`( `patient_id`, `pateint_name`, `appointment_activity`,`doctor_id`, `scheduled_month`, `scheduled_time`) 
        VALUES ('$patient_id','$pateint_name','$appointment_activity','$doctor_id','$s_m','$s_time')";
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        header("location:index.php");


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
                    <div class="p-2">
                        <div class="d-flex">
                            <h3>Hi ! Let's <span class="text-success"> create an Appointment</span> </h3>
                            <h5 class="ml-auto">Form / <span class="text-success">Validation</span> </h5>
                        </div>
                        <div class="p-2 shadow mb-5 " style="background-color: white;">
                            <div class="form-valiadtion">
                                <h4 class="ml-5">Form Validation Data</h4>
                                <form action="" method="POST">
                                    <div class="p-5">
                                        <div class="p-5">
                                            <div class="form-group">
                                                <label for="">Pateint ID</label>
                                                <input type="text" class="form-control"  name="patient_id" required id="">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Patient Name</label>
                                                <input type="text" class="form-control"  name="pateint_name" required id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Select Appointment Activity</label>
                                                <select name="appointment_activity" id="" class="form-control">
                                                <option value="Screening">Select</option>
                                                <option value="Therapy">Therapy</option>
                                                <option value="Consulation">Consulation</option>
                                                <option value="Screening">Screening</option>
                                                <option value="Therapy">Therapy</option>
                                                <option value="Consulation">Consulation</option>
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
                                                   
                                                    <option value="1">dgdgd</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                              <div class="d-flex">
                                              <input type="date" name="s_m" class="form-control mr-3" required id="">
                                              <input type="time" name="s_time" class="form-control " required id="">
                                              </div>
                                            </div>
                                            <div class="d-flex m-0 justify-content-center">
                                        <button name="submit" name="save" style="background-color: green; color: #fff;" class="btn  pl-5 pr-5">Submit</button>
                                    </div>

                                        </div>
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