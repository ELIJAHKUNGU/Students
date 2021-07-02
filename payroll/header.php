<?
require 'security.php';
?>


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