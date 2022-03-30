<?php


require_once 'security.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/all.min.css" />
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/bootstrap.css" />
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" class="nav-item" class="nav-item" href="./css/styles.css" />
    <link rel="stylesheet" href="./DataTables/datatables.min.css">
    <title>Hospital System Dashboard</title>
</head>

<body>
    <style>
        body {
            background-color: #E5E5E5;
        }
    </style>
    <div class="row">
        <div class="col-sm-5 pt-4">
            <div class="d-flex  mt-3">
                <img src="./assets/logo.png" class="img-fluid ml-2" style="max-width: 50px; margin-right: 15px;" alt="" srcset="">
                <img src="./assets/logo-text.png" class="img-fluid mr-2" style="max-width: 150px;" alt="" srcset="">

            </div>
            <div class="pl-2">
                <a href="./index.php" class="nav-link mt-3">
                    <li class="nav-item d-flex dashboard">
                        <span class=""> Dashboard </span>
                        <span class="ml-auto"><i class="fas fa-chevron-down"></i></span>
                    </li>

                </a>
                <div class="pl-5">
                <a href="./index.php">
                            <li>Admin</li>
                </a>
                </div>

                <a href="" class="nav-link mt-3">
                    <li class="nav-item d-flex dashboard">
                        <span class=""> Doctors </span>
                        <span class="ml-auto"><i class="fas fa-chevron-down"></i></span>
                    </li>
                </a>
                <div class="pl-5">
                    <a href="">
                        <a href="./doctorprofile.php">
                            <li>Doctor profile</li>
                        </a>
                        <a href="./doctors.php">
                            <li>Doctors</li>
                        </a>
                        <a href="./toprated.php">
                            <li>Top Rated</li>
                        </a>
                        <a href="./appointments.php">
                            <li>Appointments</li>
                        </a>

                    </a>
                </div>
                <a href="" class="nav-link mt-3">
                    <li class="nav-item d-flex dashboard">
                        <span class=""> Patients </span>
                        <span class="ml-auto"><i class="fas fa-chevron-down"></i></span>
                    </li>
                </a>
                <div class="pl-5">
                    <a href="">
                        <a href="./patientsdetails.php">
                            <li>Patient profile</li>
                        </a>
                        <a href="./patients.php">
                            <li>Patients</li>
                        </a>
                        <!-- <a href="./createappointment.php">
                            <li>Create an Appointment</li>
                        </a> -->
                        


                    </a>
                </div>
                <a href="./events.php" class="nav-link mt-3">
                    <li class="nav-item d-flex dashboard">
                        <span class="">Others </span>
                        <span class="ml-auto"><i class="fas fa-chevron-down"></i></span>
                    </li>
                </a>
                <div class="pl-5">
                    <a href="./events.php">
                       
                        <a href="./events.php">
                            <li>Upcoming Events</li>
                        </a>


                    </a>
                </div>
                <div class="logo-dashboard mt-5">
                    <div class="d-flex justify-content-center">
                        <img src="./assets/logo-text.png" class="img-fluid" style="width:100px" alt="" srcset="">

                    </div>
                    <h3>Medical Hospital Admin Dashboard</h3>
                    <p>&copy; 2021 All Rights Reserved</p>
                    <h6>Made with &LeftDownVector; </h6>

                </div>

            </div>
        </div>