<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


if (isset($_GET["id"])){
    $id = $_GET["id"];
    require 'db.php';
    $sql="SELECT * FROM `appointments` WHERE  appointment_id= $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    extract($row);
}




if (isset($_POST["save"])) {


 


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
                            <h3>Hi ! Let's <span class="text-success">  Send Email</span> </h3>
                            <h5 class="ml-auto">Form / <span class="text-success">Validation</span> </h5>
                        </div>
                        <div class="p-2 shadow mb-5 " style="background-color: white;">
                            <div class="form-valiadtion">
                                <h4 class="ml-5">Form Validation Data</h4>
                                <form action="" method="POST">
                                    <div class="pl-5 pr-5">
                                        <div class="pl-5 pr-5">
                                           
                                            <?php
                                                
                                                
                                                require 'db.php';
                                                $patient_id =$row['patient_id']; 
                                                
                                                $sql="SELECT * FROM `patients` where patient_id = $patient_id ";
                                                $result = mysqli_query($conn, $sql);
                                                $row2 = mysqli_fetch_assoc($result);
                                                extract($row2);
                                                // print_r($row2);

                                                $doctor_id= $row['doctor_id'];

                                                    $sql="SELECT * FROM `doctors` WHERE  doctor_id= $doctor_id";
                                                    $result = mysqli_query($conn, $sql);
                                                    $row3 = mysqli_fetch_assoc($result);
                                                    $doctor_name = $row3['doctor_name'];
                                                ?>
                                            <div class="form-group">
                                                <p class="text-success">Kindly note the email will be sent using the email provided for patient</p>
                                                <label for="">From: Email Address</label>
                                                <input type="text" class="form-control" disabled value="<?= $row2['patient_name']?>" name="patient_id" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">TO:Patient Email Address</label>
                                                <input type="text" class="form-control" disabled value="<?= $row2['email']?>" name="patient_id" id="">
                                            </div>
                                            <label for="">Email</label>
                                            <style>
                                                textarea{
                                                    padding-left:0px;
                                                }
                                            </style>
                                            <textarea name="" class="form-control" id="" cols="30" rows="3">
                                            Hello  <?= $row2['patient_name']?> you have an appointment scheduled at  <?= $row['scheduled_month']?> <?= $row['scheduled_time']?> with Doctor  <?=$doctor_name?>  

                                            </textarea>


                                            
                                            
                                           
                                            </div>
                                        <div class="ml-5 mt-4 d-flex justify-content-center">
                                            <button style="background-color: green; color: #fff; min-width: 260px;" name="save" class="btn  pl-5 pr-5">Send Email</button>
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