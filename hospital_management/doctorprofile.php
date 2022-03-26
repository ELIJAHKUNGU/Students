<?php
if (isset($_POST["save"])) {
    $conn = mysqli_connect("localhost","root","","hosi");
    extract($_POST);
    $sql = "INSERT INTO `doctors`( `doctor_username`, `doctor_phNo`, `doctor_title`, `salary`, `doctor_name`, `specialist`, `status`, `address`, `Telephone`, `doctor_notes`)
    VALUES ('$username','$doctor_phNo','$title','$salary','$fullname','$specialist','$status','$address','$telephone','$notes')";
       if ($conn->query($sql) === TRUE) {

        header("location:doctors.php?success= Doctors profile have been created successfully ");
    
    } else {
        header("location:doctors.php?error=Your Doctors profile was not created  +2547  220 000");
    
    
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
                        <h3>Hi ! Let's <span class="text-success">Empoly Doctor</span> </h3>
                        <h5 class="ml-auto">Form / <span class="text-success">Validation</span> </h5>
                    </div>
                    <div class="p-2 shadow mb-5 " style="background-color: white;">
                        <div class="form-valiadtion">
                            <h4 class="ml-5">Form Validation Data</h4>
                            <form action="#" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="">Full Name</label>
                                        <input type="text" placeholder="Robert Mwarau" class="form-control" required name="fullname">
                                        <label for="">Username</label>
                                        <input type="text" class="form-control" placeholder="DR. Robert" required name="username">
                                        <label for="">Primary Phone Number</label>
                                        <input type="text" class="form-control" placeholder="+2547 43 0000 0000" required name="doctor_phNo">
                                        <select required name="title" class="form-control mt-2" id="">
                                            <option value="">Select Title</option>
                                            <option value="Mr">MR</option>
                                            <option value="Dr">Dr</option>
                                            <option value="Mrs">MRS</option>
                                        </select>
                                        <select required name="specialist" class="form-control mt-4" id="">
                                            <option value="">Select Specialist</option>
                                            <option value="Densit">Densit</option>
                                            <option value="Physical Therapy">Physical Therapy</option>
                                            <option value="Nurse">Nurse</option>
                                            <option value="Therapist">therapist</option>
                                            <option value="Ophthalmology">Ophthalmology</option>
                                            <option value="clinical psychologis">clinical psychologis</option>
                                            <option value="optometrist">optometrist</option>
                                            <option value="chiropractor">chiropractor</option>
                                            <option value="Psychiatry">Psychiatry</option>
                                            <option value="Dermatology">Dermatology</option>
                                            <option value="Anesthesiology">Anesthesiology</option>
                                            <option value="Clinical Immunology/Allergy">Clinical Immunology/Allergy</option>
                                            <option value="clinical dietitian">clinical dietitian</option>
                                        </select>
                                        <label for="" class="mt-3">Address</label>
                                        <input type="text" placeholder="244-900 KIAMBUI ADAMS ARACADE AVENUE" required name="address" class="form-control ">

                                    </div>
                                    <div class="col-sm-6">
                                        <label for="">Salary </label>
                                        <input type="number" class="form-control" placeholder="500 000" required name="salary" id="">
                                        <label for="">Status</label>
                                        

                                      <select name="status" class="form-control" id="status">
                                          <option value="available">Available</option>
                                          <option value="unavailable">Unavailable</option>
                                      </select>
                                        <label for="">Telephone</label>
                                        <input type="text" class="form-control" placeholder="+2547 43 0000 0000" required name="telephone">
                                        <textarea required name="notes" placeholder="Add notes......." class="form-control mt-3" id="" cols="30" rows="4"></textarea>
                                        <!-- <label for="Doctor Profile"></label>
                                        <input type="file" name="profile" class="form-control" id=""> -->

                                    </div>
                                </div>
                                <div class="d-flex mt-2 justify-content-center">
                                    <input type="checkbox" class="mt-1" name="" id="" required>
                                    <div class="ml-3 mt-3">
                                        <p>I Terms and conditions agree to the terms</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button style="background-color: green;  color: #fff;" name="save" class="btn  pl-5 pr-5">Submit</button>
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