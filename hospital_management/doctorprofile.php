
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
                        <h3>Hi ! Let's <span class="text-success">Empoly Doctor</span> </h3>
                        <h5 class="ml-auto">Form / <span class="text-success">Validation</span> </h5>
                    </div>
                    <div class="p-2 shadow mb-5 " style="background-color: white;">
                        <div class="form-valiadtion">
                            <h4 class="ml-5">Form Validation Data</h4>
                            <form action="">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="">Full Name</label>
                                        <input type="text" placeholder="Robert Mwarau" class="form-control" name="fullname">
                                        <label for="">Username</label>
                                        <input type="text" class="form-control" placeholder="DR. Robert" name="username">
                                        <label for="">Primary Phone Number</label>
                                        <input type="text" class="form-control" placeholder="+2547 43 0000 0000" name="username">
                                        <select name="" class="form-control mt-2" id="">
                                            <option value="">Select Title</option>
                                            <option value="Mr">MR</option>
                                            <option value="Dr">Dr</option>
                                            <option value="Mrs">MRS</option>
                                        </select>
                                        <select name="" class="form-control mt-4" id="">
                                            <option value="">Select Specialist</option>
                                            <option value="Mr">Densit</option>
                                            <option value="Nurse">Physical Therapy</option>
                                            <option value="Dr">Nurse</option>
                                            <option value="Mrs">therapist</option>
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
                                        <input type="text" placeholder="244-900 KIAMBUI ADAMS ARACADE AVENUE" class="form-control ">

                                    </div>
                                    <div class="col-sm-6">
                                        <label for="">Salary </label>
                                        <input type="number" class="form-control" placeholder="500 000" name="" id="">
                                        <label for="">Status</label>
                                        <input type="text" class="form-control" name="username">
                                        <label for="">Telephone</label>
                                        <input type="text" class="form-control" placeholder="+2547 43 0000 0000" name="username">
                                        <textarea name="" placeholder="Add notes......." class="form-control mt-3" id="" cols="30" rows="4"></textarea>
                                        <label for="Doctor Profile"></label>
                                        <input type="file" name="profile" class="form-control" id="">

                                    </div>
                                </div>
                                <div class="d-flex mt-2 justify-content-center">
                                    <input type="checkbox" class="mt-1" name="" id="">
                                    <div class="ml-3 mt-3">
                                        <p>I Terms and conditions agree to the terms</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
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