<?php
if (isset($_POST["save"])){
    //save to db
    require 'DB.php';
    extract($_POST);
    $sql = "INSERT INTO `employees`(`e_id`, `e_name`, `e_phone`, `e_email`, `e_idno`, `e_age`, `e_address`, `e_loans`, `e_status`, `e_salary`) 
    VALUES ('null','$e_name','$e_number','$e_email','$e_idno','$e_age','$e_address','$loans', '$e_status','$e_salary')";
   if( mysqli_query($conn,$sql) === TRUE){
       echo '<script>alert("Records added success")</script>';
    header('location:index.php');  


   }else{
       mysqli_error($conn);
   }
   

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
    <title>Payroll System </title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand" href="">Payroll System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./employees.php">Employees</a>
                    </li>

                    
                    <li class="nav-item">
                        <a class="nav-link" href="./paymets.php">Paymets </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./addemployees.php">Add Employee</a>
                    </li>
                   
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <?//=$_SESSION["info"]["names"]?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <script>
        //alert("You need to read the documetation before using the above system")
    </script>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h1>Employes Details</h1>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form" method="POST">
                            <span style="color: red;">*All Fields Required</span>
                            <div class="form-group">
                                <label for="">Full Name</label>
                                <input type="text" name="e_name" placeholder="eg.John Smith King" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <div class="d-flex">
                                    <div class="d-block " style="width:100%">
                                        <label for="" class="ml-3">Phone Number </label>
                                        <input type="number" name="e_number" placeholder="Phone Number"  class="form-control mr-3 " required>
                                    </div>
                                    <div class="d-block" style="width:100%">
                                        <label for="" class="ml-3">Email Adress </label>
                                        <input type="email" name="e_email" placeholder="example@gmail.com" class="form-control ml-3" required>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="d-flex">
                                    <input type="text" name="e_idno" placeholder="ID Number " class="form-control" required>
                                    <input type="text" name="e_age" placeholder="Age" class="form-control ml-4" required>

                                </div>
                            </div>
              
                            <div class="form-group">
                                <div class="d-flex">
                                    <input type="text" name="e_address" placeholder="Adress" class="form-control" required>
                                    <select name="e_status" id="" class="form-control" required>
                                        <option value="">Select Marital</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="loans" id="" class="form-control" required>
                                    <option value="">Select loans</option>
                                    <option value="250">Helb</option>
                                    <option value="1000">Bank Loan</option>
                                    <option value="500">NHIF</option>
                                    <option value="1000">Others</option>
                                    <option value="0">None</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Salary </label>
                                <input type="number" name="e_salary" placeholder="eg.10000" class="form-control" required>
                            </div>
                            <button name="save" class="btn btn-success pr-5 pl-5 form-control">Save</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 docs">
                <h3>Documetation</h3>
                <h6>All fields should be filled before </h6>

                
               
                <h4>Loans</h4>
                <hr>
                <p>On above Field Provide select from the given fields <br>
                NB: <span>Any Field Selected will deduct some amount from salary paymet </span>
                 <li>Helb =>  ksh 250</li>
                 <li>Bank Loan =>  ksh 1000</li>
                 <li>NHIF =>  ksh 500</li>
                 <li>Others =>  ksh 250</li>
                 <li>None =>  ksh 0</li>
                </p>



            </div>
        </div>
    </div>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>

</html>