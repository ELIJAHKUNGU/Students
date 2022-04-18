<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./DataTables/datatables.min.css">

    <title>Autoride-chauffeur-booking </title>
</head>

<body>
    <!-- start #header -->
    <header id="header" class="">
        <!-- Primary Navigation -->
        <div class="container topbar">
            <div class="d-flex  ">
                <p>Fairview Ave, El Monte,Kilimani</p>
                <div class="d-flex ml-5">
                    <i class="fa fa-envelope mt-1"></i>
                    <span class="ml-2">autoride@autoride.com</span>
                </div>
                <div class="d-flex ml-auto">
               <?php
                if( !isset($_SESSION['info']) ){
                    ?>
                    <a href="register.php"> <span>Login |</span></a>
                   <a href="register.php"> <span>Register |</span></a>
                   <?php

                   

                }else{
                    ?>
                    <a href="logout.php"> <span>Login out|</span></a>
                    <?php
                }
               ?>
                   
                </div>
            </div>

        </div>

        <div class="top-secon">
            <nav class="navbar  navbar-expand-lg  container color-second-bg">

                <a class="navbar-brand" href="#">Autoride</a>
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="fas fa-bars"></i></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mt-2  font-rubik">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.php">Home</a>
                        </li>
                        <div class="dropdown">
                            <style>
                                .btn.text-white{
                                    font-weight:900;
                                    font-size:20px;
                                }
                            </style>
                            <button class="btn text-white  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Booking
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="parcel.php">Parcel Booking</a>
                                <a class="dropdown-item" href="people.php">Seats Booking</a>

                                
                            </div>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php">

                            </a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>