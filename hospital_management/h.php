<?php
if (isset($_POST["save"])) {
    $conn = mysqli_connect("localhost","root","","luluboard");
    extract($_POST);
    $sql = "INSERT INTO `contacts`( `first_name`, `second_name`, `other_names`, `gender`, `age`, `county`, `subcounty`, `town`, `phonenumber`) VALUES
     ('$first_name','$second_name','$other_names','$gender','$age','$county','$subcounty','$town','$phonenumber' )";
       mysqli_query($conn,$sql) or die(mysqli_error($conn));
       header("location:index.php");

        
       

}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/all.min.css" />
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/bootstrap.css" />
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/style.css" />
    <title>LULU BOARD_System </title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="">LULU BOARD System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Groups </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Add contacts Groups </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Add Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Paymets </a>
                    </li>


                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Contacts Group</h13>
                    </div>
                    <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                            <span style="color: red;">*All Fields Required</span>
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="first_name" placeholder="eg.John " class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Second Name</label>
                                <input type="text" name="second_name" placeholder="eg.Kingsmith" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Other Names</label>
                                <input type="text" name="other_names" placeholder="eg.DOE" class="form-control" required>
                            </div>
                            
                            <div class="d-flex space-between ">
                                <div class="form-group" >
                                    <label for="">Group Name</label>
                                    <select name="gender" id="" class="form-control">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>  
                                    </select>
                                </div>
                                <div class="form-group ml-3">
                                    <label for="">Age  </label>
                                    
                                    <select name="age" id="" class="form-control">
                                        <option value="">Select Age</option>
                                        <option value="18-25">18-25</option>
                                        <option value="25-35">25-35</option>
                                        <option value="35-42">35-45 </option>
                                        <option value="50 > above">50 above </option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="form-group">
                                    <label for="">County</label>
                                    <input type="text" name="county" placeholder="eg.County" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Sub County</label>
                                    <input type="text" name="subcounty" placeholder="eg.subCounty" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Town</label>
                                    <input type="text" name="town" placeholder="eg.Town" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="text" name="phonenumber" placeholder="eg.0743770216" class="form-control" required>
                            </div>
            
                            <button type="submit" name="save" class="btn btn-success pr-5 pl-5 form-control">Save</button>

                    </form>
                   
                    </div>
                </div>
            </div>
            <div class="col-sm-6 docs">




            </div>
        </div>
    </div>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>

</html>