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
                           
                           <h5>Good /Parcel </h5>
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





                        
                        <form action="addparcels.php" method="post">

                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text"  class="form-control"  placeholder="Client Name" name="username" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Parcel No/ID</label>
                                <input type="text" class="form-control" name="parcel_idno" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="number" class="form-control" name="phone" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="email" class="form-control" name="email" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Choose a Pickup/Delivery location </label>
                                <select name="pickup_location" class="form-control" id="">
                                    <option value="">Choose a Pickup location</option>
                                    <option value="Mombasa-Nairobi">Mombasa - Nairobi </option>
                                    <option value="Nairobi-Mombasa"> Nairobi- Mombasa </option>
                                    <option value="Mombasa-Kisumu">Mombasa - Kisumu</option>

                                </select>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="">Select Arrival  Date</label>
                                        <input type="date" class="form-control" name="date_m" id="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="">Select Arrival Time</label>
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
                                        <input type="number" min="1" max="100" placeholder="1" class="form-control"
                                            name="weight" id="">
                                    </div>
                                </div>
                                <button name="save" class="btn btn-primary-color">Book</button>


                        </form>
                    </div>
                 </div>
                </div>
                <div class="col-sm-6">
                    <style>
                        #parcel_img {
                            display: "none";

                        }
                    </style>
                    <img id="parcel_img" src="./images/234234.jpeg" style="display:none; background-size:cover" alt=""
                        srcset="">
                    <img id="people_img" src="./images/b2.png" class="img-fluid"
                        style="padding-left:10px; background-color:#F8FAF9; margin-top:100px; margin-left:30px; padding-bottom:180px; padding-top:20rem;"
                        alt="">
                </div>
            </div>
        </div>
    </div>

</section>
<script>
    var pacelForm = document.getElementById("pacelForm");
    var PeopleForm = document.getElementById("PeopleForm");
    var imgpeople = document.getElementById("people_img");
    var imgparcel = document.getElementById("parcel_img");
    var Indicator = document.getElementById("Indicator");


    function people() {
        PeopleForm.style.transform = "translateX(0px)";
        pacelForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(-10px)";
        pacelForm.style.display = "none";
        PeopleForm.style.display = "block"
        imgpeople.style.display = "block"
        imgparcel.style.display = "none"

    }

    function parcel() {
        PeopleForm.style.transform = "translateX(300px)";
        pacelForm.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(100px)";
        PeopleForm.style.display = "none";
        pacelForm.style.display = "block";
        imgpeople.style.display = "none"
        imgparcel.style.display = "block";

    }
</script>
</section>
<script src="./js/jquery.min.js "></script>
<script src="./js/bootstrap.min.js "></script>
<script src="./js/bootstrap.js "></script>
<script src="./js/index.js "></script>


</body>

</html>