
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"class="nav-item" class="nav-item" href="./css/all.min.css">
    <link rel="stylesheet"class="nav-item" class="nav-item" href="./css/bootstrap.css">
    <link rel="stylesheet"class="nav-item" class="nav-item" href="./css/bootstrap.min.css">
    <link rel="stylesheet"class="nav-item" class="nav-item" href="./css/style.css">
    <title>Payroll System</title>
</head>
<body>
   <header>
    <link rel="stylesheet"class="nav-item" class="nav-item" href="css/bootstrap.css">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand"class="nav-item" class="nav-item" href="show.php">Payroll System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"><?//=$_SESSION["info"]["names"]?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>

        </ul>
        
    </nav>
   </header>
   <div class="dashboard">
    <div class="row">
        <div class="col-sm-3 pl-4">
            <div class="mt-3">
                <div class="user-img ml-4 d-flex">
                    <i class="fas  fa-user"></i>
                </div>
                <h6 class="ml-2 mt-3">Managing Director</h6>
            </div>
            <div class="mt-3">
                <div class="dashboard-links">
                    <a class="nav-item" href="./index.php"><li><i class="fas mr-3 fa-home"></i>Home  </li></a>
                    <a class="nav-item" href="./employees.php"><li><i class="fas mr-3 fa-user"></i>Employees  </li></a>
                    <a class="nav-item" href="./paymets.php"><li><i class="fas mr-3 fa-briefcase"></i> Show Paymets </li></a>
                    <a  class="nav-item" href="./addemployees.php"><li><i class="fas mr-3 fa-plus"></i>Add Employess</li></a>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
        <?php
        require 'security.php';


            if (isset($_GET["id"])){
                $id = $_GET["id"];
                require 'DB.php';
                $sql ="SELECT * FROM `payslips` WHERE pay_id= $id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                extract($row);
            }
        ?>
            <div class="pay-client">
                <div class="card pl-4 pr-4 mt-5">
                    <div class="text-center mt-2">
                        <h4>Pay Slip</h4>
                    </div>
                    <form action="" method="post">

                    
                        <div class="form-group">
                            <label for="">Name Of Employee</label>
                            <input type="text" name="e_name" value="<?=$e_name?>"disabled class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="text" name="e_phone"  value="<?=$e_phone?>" disabled class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Huduma NO/Social NO</label>
                            <input type="text" name="e_idno" value="<?=$e_idno?>" disabled class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email Address</label>
                            <input type="text" name="e_email" value="<?=$e_email?>" disabled class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Loans deductions</label>
                            <input type="text" name="e_loansd"  value="<?=$p_day?>" disabled class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Salary</label>
                            <input type="text" name="e_salaryd" value="<?=$e_salary?>" disabled class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>