<?php
require_once 'config.php';
include 'header.php';

?>


    </header>
    <section>
        <div class="customer-form">
            <div class="container">

                    <div class="row">
                        <div class="col-sm-6 mt-5">
                            <div class="form-container">
                                <div class="form-btn ">
                                    <span onclick="people()">People</span>
                                    <span onclick="parcel()">Goods and Items/Parcel</span>
                                    <hr id="Indicator">

                                </div>
                                <?php
                                if (isset($_GET['error'])) { ?>
                                    <p class="text-danger">
                                        <?php echo $_GET['error']; ?>
                                    </p>
                                    <?php } ?>

                                    <?php if (isset($_GET['success'])) { ?>
                                    <p class="text-success">
                                        <?php echo $_GET['success']; ?>
                                    </p>
                                    <?php } ?>
                                <?php
                                    error_reporting(E_ALL);
                                    ini_set('display_errors', 1);
                                    if (isset($_POST["save"])) {
                                        $conn = mysqli_connect("localhost","root","","autoride");
                                        extract($_POST);
                                        $sql = "INSERT INTO `people_requests`(`request_id`, `user_id`, `username`, `parcel_idno`, `pickup_location`, `date_m`, `time_t`, `model`, `weight`) 
                                        VALUES (null,'$user_id','$username','$parcel_idno','$pickup_location','$date_m','$time_t','$model','$weight')";
                                        $result2 =  mysqli_query($conn, $sql);
                                        if ($result2){
                                            header("location:index.php?success=Your account has been  successfully created login");
                                            exit();
                                    }else{
                                        header("location:h.php?error=unknown error occurred&");
                                        }
                                    }
                                   
                                  
                                    if (isset($_POST["book_seats"])) {
                                        $conn = mysqli_connect("localhost","root","","autoride");
                                        extract($_POST);
                                        $sql = "INSERT INTO `people_people`(`request_id`, `user_id`,`idNo`,  `username`, `pickup_location`, `date_m`, `time_t`, `model`, `no_seats`) 
                                        VALUES (null,'$user_id', '$idNo','$username','$pickup_location','$date_m','$time_t','$model','$no_seats')";
                                         $result2 =  mysqli_query($conn, $sql);
                                         if ($result2){
                                             header("location:index.php?success=Your account has been  successfully created login");
                                             exit();
                                       }else{
                                         header("location:h.php?error=unknown error occurred&");
                                          }
                                    }
                                 ?>
                                    <form action="" method="post" id="pacelForm">

                                        <div class="d-block">
                                            <?php
                                                // require 'config.php';
                                                // echo $user_id;
                                                // echo $username;

                                            ?>

                                                <hr>
                                                <!-- <label for="">User_id</label> -->
                                                <input type="hidden" class="form-control" value="<?php echo $user_id?>" name="user_id" id="">

                                                <label for="">Username</label>
                                                <input type="text" disabled class="form-control" value="<?php echo $username?>" name="username" id="">
                                        </div>
                                        <div class="d-block">
                                            <label for="">Parcel No/ID</label>
                                            <input type="text" class="form-control" name="parcel_idno" id="">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Choose a Pickup/Delivery location </label>
                                            <select name="pickup_location" class="form-control" id="">
                                                <option value="">Choose a Pickup location</option>
                                                <option value="Mombasa - Nairobi ">Mombasa - Nairobi </option>
                                                <option value="Nairobi Mombasa "> Nairobi- Mombasa </option>
                                                <option value="Mombasa - Kisumu">Mombasa - Kisumu</option>
                                             </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-block">
                                                <label for="">Select Date</label>
                                                <input type="date" class="form-control" name="date_m" id="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-block">
                                                <label for="">Select Time</label>
                                                <input type="time" class="form-control" name="time_t" id="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Select Model</label>
                                            <select name="model" id="" class="form-control">
                                                <option value="">Select the Model</option>
                                                <option value="Easy Coach">Easy Coach</option>
                                                <option value="Modern Coast">Modern Coast</option>
                                                <option value="Express">Express </option>
                                                <option value="Flight one">Flight one</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-block">
                                                <label for="">Weight in Kgs</label>
                                                <input type="number" min="1" max="100" placeholder="1" class="form-control" name="weight" id="">
                                            </div>
                                        </div>
                                        <button name="save" class="btn btn-primary-color">Book</button>


                                    </form>



                                    <form action="" method="post" id="PeopleForm">

                                        <div class="d-block">
                                        <?php
                                            // require 'config.php';
                                            // echo $user_id;
                                            // echo $username;

                                        ?>

                                                <hr>
                                                <!-- <label for="">User_id</label> -->
                                                <input type="hidden" class="form-control" value="<?php echo $user_id?>" name="user_id" id="">
                                                <div class="d-block">
                                                    <label for="">ID</label>
                                                    <input type="text" class="form-control" name="idNo" id="">
                                                </div>

                                                <label for="">Username</label>
                                                <input type="text" disabled class="form-control" value="<?php echo $username?>" name="username" id="">


                                        </div>

                                        <div class="form-group">
                                            <label for="">Choose a Pickup/Delivery location </label>
                                            <select name="pickup_location" class="form-control" id="">
                                                <option value="">Choose a Pickup location</option>
                                                <option value="Mombasa - Nairobi ">Mombasa - Nairobi </option>
                                                <option value="Nairobi Mombasa "> Nairobi- Mombasa </option>
                                                <option value="Mombasa - Kisumu">Mombasa - Kisumu</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-block">
                                                <label for="">Select Date</label>
                                                <input type="date" class="form-control" name="date_m" id="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-block">
                                                <label for="">Select Time</label>
                                                <input type="time" class="form-control" name="time_t" id="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Select Model</label>
                                            <select name="model" id="" class="form-control">
                                                <option value="">Select the Model</option>
                                                <option value="Easy Coach">Easy Coach</option>
                                                <option value="Modern Coast">Modern Coast</option>
                                                <option value="Express">Express </option>
                                                <option value="Flight one">Flight one</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-block">
                                                <label for="">NO SEATS</label>
                                                <input type="number" min="1" max="52" placeholder="1" class="form-control" name="no_seats" id="">
                                            </div>
                                        </div>
                                        <button name="book_seats" class="btn btn-primary-color">Book</button>


                                    </form>


                                    </form>
                            </div>
                        </div>
                    
                   
                        <div class="col-sm-6">
                            <img src="./images/234234.jpeg" alt="" srcset="">
                        </div>
                    </div>
            </div>
        </div>
        
    </section>
    <script>
        var pacelForm = document.getElementById("pacelForm");
        var PeopleForm = document.getElementById("PeopleForm");
        var Indicator = document.getElementById("Indicator");


        function people() {
            PeopleForm.style.transform = "translateX(0px)";
            pacelForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(-10px)";
            pacelForm.style.display = "none"
            PeopleForm.style.display = "block"

        }

        function parcel() {
            PeopleForm.style.transform = "translateX(300px)";
            pacelForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(100px)";
            PeopleForm.style.display = "none";
            pacelForm.style.display = "block"

        }
    </script>



    <div class="text-center text-white ">
    </div>
    </div>
    </div>
    </section>
    <script src="./js/jquery.min.js "></script>
    <script src="./js/bootstrap.min.js "></script>
    <script src="./owl-carousel/js/owl.carousel.min.js "></script>
    <script src="./js/bootstrap.js "></script>
    <script src="./js/index.js "></script>


    </body>

    </html>