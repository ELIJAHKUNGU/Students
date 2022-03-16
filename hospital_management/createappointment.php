
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
                                <form action="">
                                    <div class="p-5">
                                        <div class="p-5">
                                            <div class="form-group">
                                                <label for="">Pateint ID</label>
                                                <input type="text" class="form-control" disabled name="PateintId" id="">
                                            </div>
                                            <div class="form-group">
                                                <select name="" class="form-control" id="">
                                                    <option value="Select Doctor">Select Doctor</option>
                                                    <option value="">Dr Mwangi</option>
                                                    <option value="">Dr Mwangi</option>
                                                    <option value="">Dr Mwangi</option>
                                                    <option value="">Dr Mwangi</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Patient Name</label>
                                                <input type="text" class="form-control" disabled name="PateintId" id="">
                                            </div>
                                            <div class="form-group">
                                                <select name="" class="form-control" id="">
                                                    <option value="Select Time">Select Time</option>
                                                    <option value="7am - 8am">7am - 8am </option>
                                                    <option value="9am -10am ">9am -10am </option>
                                                    <option value="11am- 12pm ">11am- 12pm </option>
                                                 
                                                    <option value="1pm - 2pm ">1pm - 2pm </option>
                                                    <option value="3pm - 4pm">3pm - 4pm </option>
                                                    <option value="5pm - 6pm">5pm -  6pm </option>
                                                    <option value="7pm - 8pm ">7pm - 8pm</option>
                                                    <option value="9pm - 10pm">9pm - 10pm </option>
                                                    <option value="11pm -12pm ">11pm - 12am </option>
                                                   
                                                   
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="ml-5">
                                        <button style="background-color: green; color: #fff;" class="btn  pl-5 pr-5">Submit</button>
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