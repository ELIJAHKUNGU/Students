<?php


if (isset($_POST["save"])) {
    $conn = mysqli_connect("localhost","root","","hosi");
    extract($_POST);
$sql = "INSERT INTO `patients`(`patient_id`, `patient_name`, `patient_age`, `phoneNumber`, `email`, `other_diseases`, `hiv_level`, `blood_group`, `type_arvs` ,`status`)
 VALUES (null,'$patient_name','$patient_age','$phoneNumber','$email','$other_diseases','$hiv_level','$blood_group','$type_arvs','1')";
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
                    <h2>Patients Profile</h2>
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
                                                <input type="text" class="form-control" name="patient_name" id="" required>
                                            </div>
                                            
                                           
                                            <div class="form-group">
                                                <label for="">Age</label>
                                                <input type="number" class="form-control" name="patient_age" id="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Phone number</label>
                                                <input type="number" class="form-control" name="phoneNumber" id="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Other Diseases</label>
                                                <input type="text" class="form-control" name="other_diseases" id="" required>
                                            </div>
                                            <div class="form-group">
                                                <select name="hiv_level" class="form-control" id="" required>
                                                    <option value="Select Time">HIV LEVEL</option>
                                                    <option value="Infection">Infection. </option>
                                                    <option value="ASymptomatic">Asymptomatic </option>
                                                    <option value="Symptomatic "> Symptomatic </option>
                                                 
                                                </select>
                                            </div>
                                            <!-- abacavir (Ziagen)
emtricitabine (Emtriva)
lamivudine (Epivir)
stavudine (Stavudine)
tenofovir disoproxil fumarate (Viread)
zidovudine (Retrovir) -->
                                            <div class="form-group">
                                                <select name="blood_group" class="form-control" id="" required>
                                                    
                                                    <option value="Select Time">Blood group</option>
                                                    <option value="A">A  </option>
                                                    <option value="B">B  </option>
                                                    <option value="AB "> AB </option>
                                                    <option value="O "> O </option>
                                                 
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select name="type_arvs" class="form-control" id="" required>
                                                    <option value="">Select Type of ARVS</option>
                                                    <option value="abacavir (Ziagen)">abacavir (Ziagen)</option>
                                                    <option value="emtricitabine (Emtriva)">emtricitabine (Emtriva) </option>
                                                    <option value="lamivudine (Epivir)">lamivudine (Epivir) </option>
                                                    <option value="zidovudine (Retrovir)">zidovudine (Retrovir) </option>
                                                    <option value="tenofovir disoproxil fumarate (Viread)"> tenofovir disoproxil fumarate (Viread) </option>
                                                    
                                                 
                                                </select>
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